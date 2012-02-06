#include <types.h>

#ifndef _BREWNANOD_H_
#define _BREWNANOD_H_

#define BND_SOCKET_DIR "/var/brewnanod/"

#define BND_TYPE_MASK   0xF0
#define BND_TYPE_POWER  0x00
#define BND_TYPE_VALVE  0x10
#define BND_TYPE_PUMP   0x20
#define BND_TYPE_HEATER 0x30
#define BND_TYPE_SENSOR 0x40

/**
 * Brewnanod commands are specified as single byes.
 */
typedef uint8_t bnd_cmd_t;

/**
 * On Linux, GPIO pins are specified by a bank/chip, and a pin. Generally, a bank
 * is constrained to 32 pins- reflecting the register width of most platforms. This
 * is especially true on the OMAP processor that the Beaglebone uses.
 */
struct gpio_id_t {
	uint16_t gpio_bank;
	uint16_t gpio_pin;
};

#define BND_VALVE1_BANK 0
#define BND_VALVE2_BANK 0
#define BND_VALVE3_BANK 0
#define BND_VALVE4_BANK 0
#define BND_VALVE5_BANK 0
#define BND_VALVE6_BANK 0
#define BND_VALVE7_BANK 0
#define BND_VALVE8_BANK 0

#define BND_VALVE1_BIT 0
#define BND_VALVE2_BIT 1
#define BND_VALVE3_BIT 2
#define BND_VALVE4_BIT 3
#define BND_VALVE5_BIT 4
#define BND_VALVE6_BIT 5
#define BND_VALVE7_BIT 6
#define BND_VALVE8_BIT 7

#endif /* _BREWNANOD_H_ */
