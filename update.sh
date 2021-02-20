#!/bin/sh
# Johnny Piette & Matthieu Darfeuille

git reset --hard origin/master
exit_status=$?

[ $exit_status -ne 0 ] && { echo "Can not \"reset\" Git's worktree ($exit_status)" >&2; exit $exit_status; }

git pull --rebase --autostash
exit_status=$?

[ $exit_status -ne 0 ] && { echo "Failed to execute \"pull\" command ($exit_status)" >&2; exit $exit_status; }
