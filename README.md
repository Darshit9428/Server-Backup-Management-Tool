# Server-Backup-Management-Tool
It is a web tool which act as an interface to transfer files from one server (host) to the other server (destination or target).
It is totally automated process and the user just need to give server details and path of files to transfer it. 
It is web tool which allows the efficient transfer of data from server to another server without data loss.
The user first login then after that he makes necessary connection between two servers by giving the port, host name etc.
So the tool we are developing is simply easy for user to use it and manage his application data on server using it.
The tool includes simple mechanisms of connecting to server and then transferring the required data file to destination server which the user wants to send.
Firstly the tool will connect to source server of user from which he wants to send data files to destination server.
Now after that the data files he wants to send gets fetched from source server and is stored inside the temp folder of user's name inside the tool database.
After that it will transfer that file from temp folder to the destination server.
Now the temp folder inside our tool will be automatically be emptied once acknowledgement of successful transfer is received.
