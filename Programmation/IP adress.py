import socket

hostname = socket.gethostname()
IPaddr = socket.gethostbyname(hostname)

print(hostname)
print(IPaddr)