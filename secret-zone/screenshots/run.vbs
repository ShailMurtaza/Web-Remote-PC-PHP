Set WshShell = CreateObject("WScript.Shell") 
WshShell.Run chr(34) & "sha.exe" & Chr(34), 0
Set WshShell = Nothing