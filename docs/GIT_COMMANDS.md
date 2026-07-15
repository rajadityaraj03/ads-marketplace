One-Time Setup (New Computer)
git --version

git config --global user.name "Aditya Raj"
git config --global user.email "your-email@gmail.com"

git config --global init.defaultBranch main

If you're using GitHub CLI (recommended):

gh auth login

Choose:

GitHub.com
HTTPS
Login with browser

Note: If you don't have GitHub CLI installed, you can skip gh auth login. Git will authenticate through Git Credential Manager when you push for the first time.

Initial Project Setup
cd C:\laragon\www\marketplace

git init

git add .

git commit -m "Initial project setup with Laravel and React"

git branch -M main

git remote add origin https://github.com/rajadityaraj03/ads-marketplace.git

git push -u origin main
Create Development Branch
git checkout -b develop

git push -u origin develop

After today, all development will happen on develop, not main.

Daily Workflow

Before starting work:

git checkout develop

git pull origin develop

After finishing work:

git status

git add .

git commit -m "Add seller registration module"

git push origin develop
Creating a New Feature
git checkout develop

git pull origin develop

git checkout -b feature/product-management

After completing the feature:

git add .

git commit -m "Implement product management"

git push origin feature/product-management

Later, merge it into develop.

Useful Commands

Current branch:

git branch

All branches:

git branch -a

Current remote:

git remote -v

View commit history:

git log --oneline
If You Change the GitHub Repository URL

Remove the old remote:

git remote remove origin

Add the new one:

git remote add origin https://github.com/rajadityaraj03/ads-marketplace.git