import pyautogui
import sys
shail = sys.argv[-1]
myScreenshot = pyautogui.screenshot()
myScreenshot.save(shail + ".png")
