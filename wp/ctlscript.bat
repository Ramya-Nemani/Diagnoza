@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist D:\wp\hypersonic\scripts\ctl.bat (start /MIN /B D:\wp\server\hsql-sample-database\scripts\ctl.bat START)
if exist D:\wp\ingres\scripts\ctl.bat (start /MIN /B D:\wp\ingres\scripts\ctl.bat START)
if exist D:\wp\mysql\scripts\ctl.bat (start /MIN /B D:\wp\mysql\scripts\ctl.bat START)
if exist D:\wp\postgresql\scripts\ctl.bat (start /MIN /B D:\wp\postgresql\scripts\ctl.bat START)
if exist D:\wp\apache\scripts\ctl.bat (start /MIN /B D:\wp\apache\scripts\ctl.bat START)
if exist D:\wp\openoffice\scripts\ctl.bat (start /MIN /B D:\wp\openoffice\scripts\ctl.bat START)
if exist D:\wp\apache-tomcat\scripts\ctl.bat (start /MIN /B D:\wp\apache-tomcat\scripts\ctl.bat START)
if exist D:\wp\resin\scripts\ctl.bat (start /MIN /B D:\wp\resin\scripts\ctl.bat START)
if exist D:\wp\jetty\scripts\ctl.bat (start /MIN /B D:\wp\jetty\scripts\ctl.bat START)
if exist D:\wp\subversion\scripts\ctl.bat (start /MIN /B D:\wp\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist D:\wp\lucene\scripts\ctl.bat (start /MIN /B D:\wp\lucene\scripts\ctl.bat START)
if exist D:\wp\third_application\scripts\ctl.bat (start /MIN /B D:\wp\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist D:\wp\third_application\scripts\ctl.bat (start /MIN /B D:\wp\third_application\scripts\ctl.bat STOP)
if exist D:\wp\lucene\scripts\ctl.bat (start /MIN /B D:\wp\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist D:\wp\subversion\scripts\ctl.bat (start /MIN /B D:\wp\subversion\scripts\ctl.bat STOP)
if exist D:\wp\jetty\scripts\ctl.bat (start /MIN /B D:\wp\jetty\scripts\ctl.bat STOP)
if exist D:\wp\hypersonic\scripts\ctl.bat (start /MIN /B D:\wp\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist D:\wp\resin\scripts\ctl.bat (start /MIN /B D:\wp\resin\scripts\ctl.bat STOP)
if exist D:\wp\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT D:\wp\apache-tomcat\scripts\ctl.bat STOP)
if exist D:\wp\openoffice\scripts\ctl.bat (start /MIN /B D:\wp\openoffice\scripts\ctl.bat STOP)
if exist D:\wp\apache\scripts\ctl.bat (start /MIN /B D:\wp\apache\scripts\ctl.bat STOP)
if exist D:\wp\ingres\scripts\ctl.bat (start /MIN /B D:\wp\ingres\scripts\ctl.bat STOP)
if exist D:\wp\mysql\scripts\ctl.bat (start /MIN /B D:\wp\mysql\scripts\ctl.bat STOP)
if exist D:\wp\postgresql\scripts\ctl.bat (start /MIN /B D:\wp\postgresql\scripts\ctl.bat STOP)

:end

