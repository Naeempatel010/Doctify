# -*- coding: utf-8 -*-
"""
Classify test image 2

"""

# -----------------------------------------------------------------------------
# READS AN IMAGE AND CLASSIFIES IT INTO ONE OF THE FOUR CLASSES: BENIGN TISSUE, 
# IN SITU CARCINOMA, INVASIVE CARCINOMA AND NORMAL CARCINOMA
# -----------------------------------------------------------------------------

from __future__ import absolute_import
from __future__ import print_function
import numpy as np
np.random.seed(1337)  # for reproducibility

import numpy as np
import normalizeStaining as norm
#import glob, os
import  cPickle
import sys
import tifffile as tiff
import os
#from matplotlib.pyplot import *


#print (str(sys.argv[1]))
#image_name="images\\4_2.tif";
nr_of_inputs = len(sys.argv)
if nr_of_inputs<2:
    sys.exit()
sys.argv.pop(0)
image_names = str(sys.argv)
#model_name="models\\model_new_128RV_4classes_13_10_49G.pkl";
#modelw_name = "models\\weigths.pkl";
#sec_classif_name="models\\SVM_classifG.pkl";
sec_classif_name=os.path.join("models","SVM_classif_try2_16_10_25.pkl");

modelCompiled_name = os.path.join("models","modelCompiled.pkl");

# Prepare test image
# -----------------------------------------------------------------------------
count=-1;

data_all=np.zeros((120,15552,32));
data2_all=np.zeros((120,15552,1));
softhist_all=np.zeros((120,32));
crisphist_all=np.zeros((120,32));
aux_labels_all=np.zeros((120,1));

#f, (ax1,ax2) = plt.subplots(1,2)

nb_classes=4;
nb_channels=3;
patchSize = 128; # patchSize x patchSize
shapex=2048 # ncols
shapey=1536 # nrows
num_images=1;
num_channels=3;
nb_patch=int(shapex/patchSize)*int(shapey/patchSize); # total number of patches


# - Load models
f_model= open( modelCompiled_name, "rb" )
model2 = cPickle.load(f_model);   #CNN
sec_classif= cPickle.load( open( sec_classif_name, "rb" ) )   #SVM

image_name = sys.argv.pop(0)
print(image_name)
# - Load image
a = np.zeros((num_images,num_channels,shapey,shapex),dtype=np.uint8)
img = tiff.imread(image_name)
img_temp = np.array(img, dtype=np.uint8)
img_temp = np.array(img_temp, dtype=np.float64)

# - Pre-process image (HE normalization)
img_preproc=norm.normalizeStaining(img_temp)

a[0,0,:,:] = img_preproc[:,:,0]
a[0,1,:,:] = img_preproc[:,:,1]
a[0,2,:,:] = img_preproc[:,:,2]
test_set_x=a;


# - Split test image in patches
patches_all=np.zeros(shape=(nb_patch,num_channels,patchSize,patchSize),dtype='uint8');
#    labels_all=np.zeros(shape=((nb_patch,1)));
first_lin_patch=0;
first_col_patch=0; 
for p in range(0,nb_patch): #for each patch        
    patch_prov=test_set_x[0,:,first_lin_patch : first_lin_patch + patchSize,first_col_patch : first_col_patch + patchSize]; # provisory patch (before possible rotation) 

    
    patches_all[p,:,:,:] = patch_prov
    first_col_patch += patchSize

    
    if first_col_patch==shapex: #run all collumns in a row, then pass to the next row
        first_col_patch=0
        first_lin_patch += patchSize

test_set_x=patches_all;          


X_test=test_set_x;
X_test = X_test.astype("float32")
X_test /= 255


nb_test = X_test.shape[0]            
for curr_patch in range(0,nb_test):
    temp = X_test[curr_patch,:,:,:]
    for curr_channel in range(0,3):
        temp[curr_channel,:,:] = temp[curr_channel,:,:]-np.average(temp[curr_channel,:,:])
        X_test[curr_patch,:,:,:] = temp    

# - Test model with image
test=model2.predict(X_test)


# - Prepare test image for classification
tmp2 =np.reshape(test,(12,16,32,9,9))
tmp3 = np.transpose(tmp2, (0,3,1,4,2))
tmp4 = np.reshape(tmp3, (12*9,16*9,32))
#tmp5 = tmp4
#tmp5[:,:,29] = 0
#tmp5 =np.argmax(tmp5,axis=2)

data = np.reshape(tmp4,(108*144,32))
softhist = np.sum(data, axis=0);
softhist = softhist/np.sum(softhist)

#data2 = np.reshape(tmp5,(108*144,1))
#crisphist = np.histogram(data2,range=(0,31),bins=32,normed=True)


# - Classify test image (softhist)
result=sec_classif.predict(softhist)
#dec = clf.decision_function([[1]])
#dec.shape[1]


# Show classification result
# -----------------------------------------------------------------------------
result_class=result;
class_names=['Benign tissue', 'In situ carcinoma', 'Invasive carcinoma', 'Normal tissue'];
result_class_name=class_names[int(result_class[0])];
print(image_name + " - " + result_class_name)
