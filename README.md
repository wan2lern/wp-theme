# WP REST API Wordpress Theme
This theme gets data from the [WP REST API](http://v2.wp-api.org) alternatively from a public API with JavaScript.

## Install wp-theme
To install this you will only need:
- To move the project into /\[homapage-url]\/wp-content/themes \(& activate it\).
- Install [WP-REST-API plugin](https://wordpress.org/plugins/rest-api/) \(& activate it\). 
> Read about the [WP-REST-API](http://v2.wp-api.org) documentation

## Checklist
- [x] Create a repository for the project at GitHub
- [x] Create a wireframe
- [x] Create a mockup
- [x] Create a working Wordpress theme
- [x] Render posts with the WP REST API from wp-databse
- [x] Render menu with the WP REST API from wp-databse
- [ ] Style the theme

### [GitHub](https://github.com) Git Terminal/ Workflow
This is a little cheatsheet for git commands:
```
##### Initialize project
1. Get started by cloning this git project
* git clone https://github.com/wan2lern/wp-theme.git
2.  Move into the project
* cd  project-text-name
3. Make a local branch
git branch local_branch
4. Checkout into the local branch
* git checkout local_repo
5. Check git-project status
* git status
6. Pull from master branch
* git pull origin master
7. List all new or modified files that haven't yet been committed.
* git status
##### Make changes to project
8. Add changed files
* git add .
...eller
* git add -A
9. Commit 
* git commit -m ''
10. Push changes 
* git push origin local_repo
11. Checkout into master
* git checkout master
12. Merge local changes
* git merge local_repo
13. Merge local with master
* git push origin master
14. Checkout back into the local branch
* git checkout local_repo
15. Pull from master branch
* git pull origin master
```