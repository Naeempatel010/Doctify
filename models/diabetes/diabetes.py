import pandas as pd 
from sklearn import svm
from sklearn.model_selection import train_test_split
from sklearn import tree
from sklearn.neighbors import KNeighborsClassifier
import numpy as np
import pickle
df = pd.read_csv('diabetes.csv')
#print(df.head())
#print(df.info())
df = df.drop(columns=['SkinThickness','DiabetesPedigreeFunction'])

#print(df.head())
X=pd.DataFrame(df.drop(columns=["Outcome"]))
y=pd.DataFrame(df["Outcome"])
X_train,X_test,y_train,y_test=train_test_split(X,y,test_size=0.25)

clf=KNeighborsClassifier(1)
clf.fit(X_train,np.ravel(y_train))
print(clf.score(X_test,y_test))

pickle.dump(clf,open("diabetes.sav","wb"))


print("training done")



