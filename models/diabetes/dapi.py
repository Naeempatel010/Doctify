import pickle
import numpy as np
loaded_diab = pickle.load(open("diabetes.sav","rb"))
	



def pred(x):
	result = loaded_diab.predict(x)
	if result == 1:
		return "yes"
	else:
		return "no"



