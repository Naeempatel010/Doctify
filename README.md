Doctify
Doctify is a web application used to diagnose diseases by accepting the symptoms/report image as the input. Doctify can diagnose or detect various diseases such as diabetes, cancer, haemorrhage, pneumonia. 

Requirements
Python 3.6
Laravel framework 5.7

Usage
The use enters the symptoms or an image as required by for the diagnoses of the disease. The web application then runs the machine learning model in the server and diagnoses the disease. It also tells about treatments available for that disease.

There are three folders-
1.	App
2.	Backend
3.	Models
App- for the website you just need to copy paste this file anywhere and then install composer in that directory.
Backend- This contains only one server file i.e. apitornado.py which needs to be run independently on the local machine or on the connected devises with proper LAN connectivity.
Model-This contains all the necessary ML models which can be trained by using the file model.py in every directory. The dataset has to follow the format of the given train directories or can be modified appropriately in model.py.

Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.
