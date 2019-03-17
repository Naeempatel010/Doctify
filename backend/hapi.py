from keras.models import load_model
import cv2
import numpy as np
from keras.preprocessing.image import ImageDataGenerator, load_img, img_to_array
img_width=128
img_height=128
model = load_model('haemorrhage.h5')


def pred1(file):
	x = cv2.imread(file,0)
	#print(x.shape)
	x=cv2.resize(x,(img_width,img_height))
	#print(x.shape)
	x = np.expand_dims(x, axis=0)
	#print(x.shape)
	#print(model.input)

	pred=model.predict(x[...,np.newaxis])

	pred = int(pred[0][0])

	class_names=["no","yes"]
	return class_names[pred]


#print(cv2.imread("099.png"))
#print(pred1("099.png"))
#print(pred1("133.png"))

