# WP REST API Wordpress Theme
This theme gets data from the [WP REST API](http://v2.wp-api.org) alternatively from a public API with JavaScript.


## Install wp-theme
To install this you will only need:
- To move the project into /\[homapage-url]\/wp-content/themes \(& activate it\).
- Install [WP-REST-API plugin](https://wordpress.org/plugins/rest-api/) \(& activate it\). 
> Read about the [WP-REST-API](http://v2.wp-api.org) documentation


### [GitHub](https://github.com) Git Terminal/ Workflow
This is a little cheatsheet for git commands:


#### Git project workflow
```
1. git clone https://github.com/wan2lern/wp-theme.git
2. cd  project-text-name
3. git branch local_branch
4. git checkout local_repo
6. git pull origin master
7. git status
8.0 (Add changed files)
8.2 git add .           # Add files
8.3 git add -A          # ---||---
8.4 git commit -m 'msg'
8.5.1 git commit -am 'msg'
10. git push origin local_repo
11. git checkout master
12. git merge local_repo
13. git push origin master
14. git checkout local_repo
15. git pull origin master
```

#### Git project workflow shell-script. Copy/paste the code and into a textfile & name the file & give the .sh extension: file-name.hs
```
#!/bin/sh
# addCommitPushToGithub.sh
# script to add, commit & push local branch to GitHub

# Get local branch name
echo 'Enter the name of local branch:'
read branch

# Get commit message
echo 'Enter commit message:'
read commitMessage

# add & commit
git commit -am "$commitMessage"

# Push local branch
git push origin $branch

# Move to master
git checkout master

# Merge local branch with master
git merge $branch

# Push to master
git push origin master

# Go back to local branch
git checkout $branch

echo 'You have successfully added, commited & pushed local branch to GitHub'

read
```