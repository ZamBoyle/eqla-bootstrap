#!/bin/sh
# Johnny Piette & Matthieu Darfeuille

# Backup au cas où...
dt=`date '+%d-%m_%Y_%Hh%M'`
git add .
git commit -a -m "Backup."
git branch my-backup_$dt

git reset --hard origin/master
exit_status=$?

[ $exit_status -ne 0 ] && { echo "Can not \"reset\" Git's worktree ($exit_status)" >&2; exit $exit_status; }

git pull --rebase --autostash origin master
exit_status=$?

[ $exit_status -ne 0 ] && { echo "Failed to execute \"pull\" command ($exit_status)" >&2; exit $exit_status; }
