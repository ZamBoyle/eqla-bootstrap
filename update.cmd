@echo off
REM Johnny Piette & Matthieu Darfeuille

REM Backup au cas où...
for /F "tokens=1,2 delims=:" %%a in ("%time%") do set t=%%ah%%b
git add .
git commit -a -m "Backup."
git branch my-backup_%date%_%t%

git fetch origin
if %ERRORLEVEL% NEQ 0 echo Failed to execute Git "fetch" command (%ERRORLEVEL%) & pause & exit /b %ERRORLEVEL%

git reset --hard origin/master
if %ERRORLEVEL% NEQ 0 echo Failed to "reset" Git's workingtree (%ERRORLEVEL%) & pause & exit /b %ERRORLEVEL%