#!/bin/bash
# addCommitPushToGithub.sh
# script to add, commit & push local branch to GitHub

# add
git add .

# Get commit message
read -p "Enter commit <message>: " commitMessage

# add + commit
read -p "Enter <local> branch name: " localBranch
git commit -am "$commitMessage"

# Push local branch
git push origin $localBranch

# Move to master
git checkout master

# Merge local branch with master
git merge $localBranch

# Push to master
git push origin master

# Go back to local branch
git checkout $localBranch

# Pull from master
git pull origin master

echo 'You have successfully added, commited & pushed local branch to GitHub'