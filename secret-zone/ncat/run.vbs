Set WshShell = CreateObject("WScript.Shell") 
WshShell.Run chr(34) & "E:\Downloads\nmap-7.70\ncat\ctrl" & Chr(34), 0
Set WshShell = Nothing