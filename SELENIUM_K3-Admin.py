from selenium import webdriver
from selenium.webdriver.common.alert import Alert
import time

driver = webdriver.Chrome(executable_path='C:\Windows\chromedriver.exe')
driver.maximize_window()
driver.implicitly_wait(10)

#Gagal login
driver.get('http://localhost/PELA_MINI_PBL/login.php')
time.sleep(1) 

username = "adminhanna"
inputusername = driver.find_element("xpath",'//*[@id="username"]')
for i in username:
    inputusername.send_keys(i)
    time.sleep(0.05)

password = "123456"
inputPassword = driver.find_element("xpath",'//*[@id="password"]')
for i in password:
    inputPassword.send_keys(i)
    time.sleep(0.05)

submit = driver.find_element("xpath",'/html/body/div/form/input')
submit.click() 
time.sleep(0.5)

#Handle javascript alert
Alert(driver).accept()

#Berhasil login
driver.get('http://localhost/PELA_MINI_PBL/login.php')
time.sleep(0.5)

username = "adminhanna"
inputusername = driver.find_element("xpath",'//*[@id="username"]')
for i in username:
    inputusername.send_keys(i)
    time.sleep(0.05)
    
password = "1717"
inputPassword = driver.find_element("xpath",'//*[@id="password"]')
for i in password:
    inputPassword.send_keys(i)
    time.sleep(0.05)

submit = driver.find_element("xpath",'/html/body/div/form/input')
submit.click() 
time.sleep(0.5)
    
# Menerima Verifikasi
driver.get('http://localhost/PELA_MINI_PBL/index2.php')
time.sleep(0.5)

dashboard = driver.find_element("xpath",'//*[@id="navbarSupportedContent"]/ul/li[2]/a')
dashboard.click()
time.sleep(0.5)

terima = driver.find_element("xpath",'/html/body/div/div/div[2]/div/div/div/table/tbody/tr[2]/td[8]/a[2]')
terima.click()
time.sleep(0.5)

#Handle javascript alert
Alert(driver).accept()

# Menolak Verifikasi
dashboard = driver.find_element("xpath",'//*[@id="navbarSupportedContent"]/ul/li[2]/a')
dashboard.click()
time.sleep(0.5)

tolak = driver.find_element("xpath",'/html/body/div/div/div[2]/div/div/div/table/tbody/tr[1]/td[8]/a[1]')
tolak.click()
time.sleep(0.5)

#Handle javascript alert
Alert(driver).accept()

# Cetak Data
driver.get('http://localhost/PELA_MINI_PBL/historyadmin.php')
time.sleep(0.5)

cetak = driver.find_element("xpath",'/html/body/div/div/div[2]/a')
cetak.click()
time.sleep(4.5)

driver.get('http://localhost/PELA_MINI_PBL/historyadmin.php')
time.sleep(0.5)