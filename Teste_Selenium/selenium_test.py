from multiprocessing.dummy import Pool
import time
from selenium import webdriver
from selenium.webdriver.common.by import By
import unittest
 
class TestSite(unittest.TestCase):
    def setUp(self) -> None:
        self.driver = webdriver.Chrome('D:\Teste_Selenium\chromedriver.exe')  # Inicia o browser
        self.driver.get('http://appsrvdev01.azurewebsites.net')  # Acessar a URL especificada
        return super().setUp()

    def test_site_access(self): # teste de disponibilidade
        elem = self.driver.find_element(By.XPATH, '//*[@id="masthead"]/div/h1')
        self.assertIsNotNone(elem.text)

    def test_site_access_time(self): #Teste de performance
        self.tempo_final = time.perf_counter()
        self.assertLessEqual(self.tempo_final, 90000)

    def test_functions(self): #Teste de funcionalidade
        self.driver.fullscreen_window()
        self.driver.find_element(By.XPATH, '//*[@id="wp-block-search__input-1"]').send_keys('wordpress')
        self.driver.find_element(By.XPATH, '//*[@id="block-2"]/form/div/button').click()
        self.driver.implicitly_wait(80)
        elem = self.driver.find_element(By.XPATH, '//*[@id="main"]/header/h1')
        self.assertEqual('Results for "wordpress"', elem.text)

    def payload(self, x): # carga para o teste de stress
        self.driver.get('http://appsrvdev01.azurewebsites.net')
        print(x)

    def test_stress(self): #Teste de carga/stress
        try:
            with Pool(10) as proc:
                proc.map(self.payload, range(20))
        except TimeoutError as ex:
            self.assertEquals(0, 1, ex.strerror)

    def tearDown(self) -> None:
        self.driver.quit()  # Encerra o browser
        return super().tearDown()

if __name__ == '__main__':
    unittest.main()