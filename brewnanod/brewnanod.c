#include <errno.h>
#include <stdio.h>
#include <fcntl.h>
#include <sys/types.h>
#include <sys/un.h>
#include <sys/socket.h>
#include <syslog.h>

#include "brewnanod.h"

#define PORT 14417

void print_help(void);

int main(int argc, char* argv[]) {
	bnd_cmd_t command;
	int serversock;
	struct sockaddr_un sock_info;
	serversock = socket(AF_UNIX, SOCK_STREAM, 0);
	if (serversock != 0) {
	}
	sock_info.sun_family = AF_UNIX;
	(void)strncopy(&sock_info.sun_path, BND_SOCKET_DIR, );
	/* socket setup */
	/* listen for connection */
		/* accept a connection */
		/* listen for commands */
		/* deal with connection closing */
	/* loop */
	return 0;
}
