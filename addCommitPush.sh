# read -p "Write project path" path
# cd path
read -p "Name your local branch" localBranch
# git checkout $localBranch
# git pull origin master
# git status
# git add .
read -p "Commit message" commitMsg
git commit -am "$commitMsg"
git push origin $localBranch
git checkout master
git merge $localBranch
git push origin master
git checkout $localBranch
echo "All done!!!"