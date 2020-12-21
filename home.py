from kivy.app import App
from kivymd.app import MDApp

from kivy.properties import ObjectProperty
from kivy.lang import Builder

import urllib.request, json

from kivy.uix.widget import Widget
from kivy.uix.screenmanager import ScreenManager, Screen

from kivy.uix.boxlayout import BoxLayout
from kivymd.uix.boxlayout import MDBoxLayout


def cekLogin(username, password):
    with urllib.request.urlopen("http://localhost/mimiclubsampit/api.php?auth=888&perintah=loginadmin&username"+username+"&password="+password) as json_url:
        data = json.loads(json_url.read())
        usernameTabel = data[0]["username"]
        passwordTabel = data[0]["password"]


        #root.manager.current = 'Beranda'
        if username==usernameTabel and password==passwordTabel:
            #print("Login Successfully")
            data=1
        else:
            #print("login Failed")
            data=0

    return data

def SaveSignUp(username, password):
    print("Save " +username)
    print("Save " +password)
    return 0

class LoginScreen(Screen):
    def doLogin(self):
        #print("WELCOME TO MENU")
         if cekLogin(self.txtUsername_.text,self.txtPassword_.text) == 1:     
              print("WELCOME TO MENU")
              self.manager.current = 'Beranda'
class HomeScreen(Screen):
    pass


class SignupScreen(Screen):
     def doSaveSignUp(self):
        SaveSignUp(self.txtUsername_SU.text, self.txtPassword_SU.text)


# penamaan class harus sama dengan file kv
# mylayout.kv
# nama class WAJIB MylayoutApp
class SimApp(MDApp):
    pass
if __name__ == '__main__':
     def build(self):
        self.theme_cls.primary_palette = "Blue"
SimApp().run()
        
