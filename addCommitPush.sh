# read -p "Write project path" $variable
# cd path
read -p "Name your local branch" localBranch
read -p "Commit message" commitMsg
git commit -am "$commitMsg"
git push origin $localBranch
git checkout master
git merge $localBranch
git push origin master
git checkout $localBranch
echo "All done!!!"