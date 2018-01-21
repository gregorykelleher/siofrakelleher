---
title: "Yun Cam"
taxonomy:
    tag: [news, featured]
image: web-summit.jpg
slug: yuncam
markdown_extra: true
date: 27-10-2015
cache_enable: false
---

I'm working on an idea for the web summit so I'll put notes here. Hopefully all done in time...

My idea is to use the Yun to take a photo with a simple webcam. The photo is kept on the Yun and then copied to my laptop. I then have a page on my site that displays all the photos it finds in that directory.


I needed to install a program (they're called packages in Linux) to keep looking for new photos and copy them across. The command to install this program called **watch** is `brew install watch`. This command allows any other command to be run at regular intervals. So I have this:

```
watch -n 3 rsync -avzhe ssh --progress --timeout=30 root@arduino.local:/mnt/sda1/summit/photos/ /Users/siofra/Documents/sites/siofrakelleher.com/user/pages/blog/4-11-2015-web-summit
```

This runs the **rsync** command every 3 seconds. The **rsync** command simply copies any new files from one place to another. In my case, it copies the photos taken on the Yun to a certain directory on my laptop. From there, my web site sees the photos and displays them. I use **ssh** to connect to the Yun as it is set up so as not to ask for a password everytime.

Now for the fun part - taking the photo. This is done by the Yun using a package called **fswebcam**. THis needs to be installed on the Yun since it is going to take the photo. The **brew install** command doesn't work on the Yun since it has a slightly different operating system to my laptop - though it's still a kind of Unix. The command to install packages on the Yun is `opkg install fswebcam`. This goes out to the internet to get the **fswebcam** package. Then I run this command with some extra parameters to tell it exactly what kind of photo I want and how to name it:

```
fswebcam -r 640x480 '%Y-%m-%d_%H%M'.jpg
```

So now I have a photo on the Yun and a command to copy it to my laptop so my website can 'see' it. Now I use Grav to look at all the photos in that folder and create a `<img>` tag to display them on a web page. Grav uses **Twig** templating to decide what goes where on a wen page. Here's the Twig I use to insert the photos:

```
{{ image.lightbox(640,480).cropResize(213,160).html }}

```


```
# put in takePhoto.sh
# chmod +x takePhoto.sh
# run with ./takePhoto.sh
DATE=$(date +"%Y-%m-%d_%H%M")
fswebcam -r 1280x720 --no-banner /home/pi/webcam/$DATE.jpg
```
