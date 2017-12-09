# SSHMONITOR


This project describes the SSH (Secure Shell) dictionary attacks detection where we are required to monitor SSH connection attempts to avoid possible dictionary attacks. Dictionary attacks are a type of fraudulent attempts made to compromise a system with SSH connection. This can also involve trying many username and password combinations on the (remote) system to gain access to it. This type of attack can be successfully recognized from analyzing network data. In this subpart, the main objectives will be to configure SSH such that if more attempts than X/Minute, the connection must be blocked for no further attempts for Y Minutes. SSH must be configured in such a way that the blockage time increases every x/minute’s attempts made and the increases by 2Y minutes, 3Y minutes etc. Suitable IP tables will be configured to block/unblock automatically.

Rest Api is used to control Firewall Remotely From Main Virtual Machine
