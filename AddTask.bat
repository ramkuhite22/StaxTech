@echo off
echo %date% %time% - %* >> "C:\path\to\tasks.txt"
start notepad "C:\path\to\tasks.txt"
exit
