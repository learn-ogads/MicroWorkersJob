![Example of the MicroWorkerJob](https://i.imgur.com/5KcLieI.png)

# Usage
This is for use with MicroWorkers or other similar services. Post it on your campaign to demonstrate to your workers what video they need to interact with and how to find it.

# Uploading
You'll want to upload all the files to your website. Personally we recommend using shared hosting. We have a video covering this in detail [here](https://learn.ogads.com/course/2-how-to-make-a-website/watch?video=16).


# How It Works
The website works by changing parameters in the URL to what you'd like. For example, if our URL was http://127.0.0.1/?keyword=modern%20warfare%203&searchText=call%20of%20duty%20zombies%20mw2&videoThumbnail=https://i3.ytimg.com/vi/7YCr1Eh_jyc/maxresdefault.jpg&channel=John%20Doe

We could change the values for *keyword*, *searchText*, *videoThumbnail*, and *channel*.

*videoThumbnail* does need to be a valid URL/image.

By changing these values it will update the text on the website. You can then copy this link with the values and send it with your campaign on MicroWorkers.

# Getting a Thumbnail From YouTube
Thumbnails need to be a specific size. We made it so that the image with max resolution from YouTube will fit.

You're able to get the thumbnail from a video by using a service such as https://www.get-youtube-thumbnail.com/. All you need to do is paste in the YouTube URL and the thumbnails with different resolutions are returned.
