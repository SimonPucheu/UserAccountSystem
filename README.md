# UserAccountSystem
This repository contains source files that can be put on any web server supporting php. This code creates a user login system, profile edit and an OAuth identification for external clients. There is an example of OAuth app in the [sandbox](sandbox) folder. The sandbox is an app that allows you to try the api and get some informations about the user.

## Installation
### Files
To get the files, you have two options:
* [Clone the repository](#clone-the-repository)
* [Download](#download)

#### Clone the repository
You can clone the repository using git or GitHub Desktop directly in the `htdocs` folder of your XAMPP server or wherever you store the files of you server. This way you just have to pull the new commits to be up-to-date with the latest upgrades and patches.

#### Download
You can also download the archive containing the source code of the latest release and extract it in the desired location. You can also upload to an external webserver such as Hostinger, 000webhost, Glitch or any other website hoster.

### Database setup
You can find in the root of the repository two databases in `.sql` format. You can run the files to create the required databases. Depending of your configuration, you will have to change the database credentials in the php code.
The default configuration is:
**host** `localhost`
**username** `root`
**password** ``

The following files contain an SQL connection:
* [src/User.php](/src/User.php):21
* [src/Client.php](/src/Client.php):13
* [auth/server.php](/auth/server.php):2-4

You are all set and ready to go!