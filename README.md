# pi-photo-frame
A simple Raspberry Pi photo frame web page, built on PHP.

This is intended to run on a Raspberry PI in fullscreen mode. It can however be run on any server or stack that supports PHP.

This is my initial guide. I have been refining the layout ever since. 
This will help you get started, if you need help setting up your PI.
https://jarrodstech.net/project-raspberry-pi-information-screen-and-slideshow/

![alt text](https://jarrodstech.net/wp-content/uploads/2022/02/example.jpg)

Edit the data.json file to change some options.

Settings:
- Change the weather location and URL (You can get the URL from here https://weatherwidget.io/)
- Change the URL of the 3 RSS Feeds shown at the bottom of the screen
- Change the URL of the Quote

Backgrounds:
- Add images to the "slideshowimages" folder. The screen will cycle through them.

Notes:
- If you delete the data.jason file, running the backend.php file will re-creeate it for you.
- The quote is downloaded from an RSS feed. If you call the API to many times it will give an error. The Quote is backed up to a file "Quote.txt". This will be used if the api returns an error.
