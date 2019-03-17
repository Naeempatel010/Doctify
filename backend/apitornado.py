from dapi import pred
from hapi import pred1
from tornado.web import Application, RequestHandler
from tornado.ioloop import IOLoop
import numpy as np 
import json
import base64
class diabetesHandler(RequestHandler):
	def post(self):
		data=self.request.body
		print(data)
		data=json.loads(data)
		#some preprocessing
		p=[]
		p.append(int(data["pregCount"]))
		p.append(int(data["glucose"]))
		p.append(int(data["blood"]))
		p.append(int(data["insulin"]))
		p.append(int(data["bmi"]))
		p.append(int(data["age"]))
		output = pred(np.array([p]))
		print("i am here")
		response = "{'response':'"+output+"'}"
		print(response)
		self.write(response)	
	


	def set_default_headers(self):
		
	    self.set_header('Access-Control-Allow-Origin', '*')
	    self.set_header('Access-Control-Allow-Headers', '*')
	    self.set_header('Access-Control-Max-Age', 1000)
	    self.set_header('Content-type', 'application/json')
	    self.set_header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS')
	    self.set_header('Access-Control-Allow-Headers',
                        'Content-Type, Access-Control-Allow-Origin, Access-Control-Allow-Headers, X-Requested-By, Access-Control-Allow-Methods')
	def OPTIONS(self):
		pass




class HemorrhageHandler(RequestHandler):
	def post(self):
		data=self.request.body
		json_string=data.decode('utf8')
		json_d = json.loads(json_string)
		imgdata = base64.b64decode(json_d['image'])
		filename = 'upload.png'
		with open(filename, 'wb') as f:
			f.write(imgdata)
		p1=pred1(filename)

		self.write(p1)



def make_app():
 	urls = [("/api/diabetes", diabetesHandler),("/api/Hemorrhage", HemorrhageHandler)]
 	return Application(urls,debug=True)
 	 	  	
 	 	  
if __name__ == '__main__':
 	app = make_app()
 	app.listen(9000)
 	IOLoop.instance().start()

    



