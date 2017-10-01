from pytube import YouTube
import os, getpass

def downloader(link):
	path = "C:/Users/" + str(getpass.getuser()) + "/Desktop/"
	ck = True
	while ck:
		try:
			yt = YouTube(link)
			ck = False
		except:
			print("error occured")
			break
		vd = yt.get("mp4", '360p')
		print("downloading", yt.filename)
		try:
			vd.download(path)
		except:
			print("Failed...")

		print("Successfully downloaded")
if __name__ == "__main__":
	url = input("url: ")
	downloader(url)