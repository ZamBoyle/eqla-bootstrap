REM Johnny Piette & Matthieu Darfeuille
@echo off

git reset --hard origin/master
if %ERRORLEVEL% NEQ 0 echo Failed to "reset" Git's workingtree (%ERRORLEVEL%) & pause & exit /b %ERRORLEVEL%

git pull --rebase --autostash
if %ERRORLEVEL% NEQ 0 echo Failed to execute Git "pull" command (%ERRORLEVEL%) & pause & exit /b %ERRORLEVEL%
