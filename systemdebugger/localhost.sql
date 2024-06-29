-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2014 at 07:50 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `debugger`
--
CREATE DATABASE `debugger` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `debugger`;

-- --------------------------------------------------------

--
-- Table structure for table `desktop`
--

CREATE TABLE IF NOT EXISTS `desktop` (
  `id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `causes` varchar(255) NOT NULL,
  `solution` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desktop`
--

INSERT INTO `desktop` (`id`, `category`, `problem`, `causes`, `solution`) VALUES
(1, 'General_Problems', 'Computer will not respond to USB keyboard or mouse.', 'Computer is in standby mode.', 'Press the power button to resume from standby mode.'),
(2, 'General_Problems', 'Computer appears locked up and will not turn off when the power button is pressed.', 'Software control of the power switch is not functional.', 'Press and hold the power button for at least four seconds until the computer turns off.'),
(3, 'General_Problems', 'Cursor will not move using the arrow keys on the keypad.', 'The Num Lock key may be on.', 'Press the Num Lock key. The Num Lock light should not be on if you want to use the arrow keys. The Num Lock key can be disabled (or enabled) in Computer Setup.'),
(4, 'General_Problems', 'System does not power on and the LEDs on the front of the computer are not flashing.', 'System unable to power on.', 'Press and hold the power button for less than 4 seconds. If the hard drive LED turns green, then: 1. Check that the voltage selector, located on the rear of the power supply on some models, is set to the appropriate voltage. Proper voltage setting depends'),
(5, 'Power_Supply_Problems', 'Power supply shuts down intermittently.', 'Power supply will not turn on because of internal power supply fault.', 'Contact an authorized service provider to replace the power supply.'),
(6, 'Power_Supply_Problems', 'Computer powered off automatically', 'A fan may be blocked or not turning. OR The heatsink is not properly attached to the processor.', 'Ensure that the computer air vents are not blocked and the processor cooling fan is running.'),
(7, 'Diskette_Problems', 'Diskette drive light stays on.', 'Diskette is incorrectly inserted.', 'Remove diskette and reinsert.'),
(8, 'Diskette_Problems', 'Drive not found.', 'Removable drive is not seated properly.', 'Reseat the drive.'),
(9, 'Diskette_Problems', 'Diskette drive cannot write to a diskette.', 'Diskette is not formatted.', 'Format the diskette. 1. From Windows Explorer select the disk (A) drive. 2. Right-click the drive letter and select Format. 3. Select the desired options, and click Start to begin formatting the diskette.'),
(10, 'Diskette_Problems', '“Invalid system disk” message is displayed.', 'Diskette error has occurred.', 'Restart the computer by pressing the power button.'),
(11, 'Hard_Drive_Problems', 'Hard drive error occurs.', 'Hard disk has bad sectors or has failed.', '1. In Windows XP, right-click Start, click Explore, and select a drive. Select File > Properties > Tools. Under Error-checking, click Check Now. 2. Use a utility to locate and block usage of bad sectors. If necessary, reformat the hard disk.'),
(12, 'Hard_Drive_Problems', 'Disk transaction problem.', 'Either the directory structure is bad or there is a problem with a file.', 'In Windows XP, right-click Start, click Explore, and select a drive. Select File > Properties > Tools. Under Error-checking, click Check Now.'),
(13, 'Hard_Drive_Problems', 'Drive not found (identified).', 'Cable could be loose.', 'Check cable connections.'),
(14, 'Hard_Drive_Problems', 'Nonsystem disk/NTLDR missing message.', 'The system is trying to start from a diskette that is not bootable.', 'Remove the diskette from the diskette drive.'),
(15, 'Hard_Drive_Problems', 'Computer will not start.', 'Hard drive is damaged.', 'Observe if the front panel Power LED is blinking RED and if any beeps are heard. See Appendix A, “POST Error Messages” to determine possible causes for the'),
(16, 'Hard_Drive_Problems', 'Computer seems to be locked up.', 'Program in use has stopped responding to commands.', 'Attempt the normal Windows “Shut Down” procedure. If this fails, press the power button for four or more seconds to turn off the power. To restart the computer, press the power button again.'),
(17, 'Multibay_Problems', 'Drive not found.', 'You attempted to hot plug a removable hard drive that has DriveLock security enabled.', 'Shut down Windows and turn off the computer. Insert the drive into the MultiBay, if it is not already inserted. Turn on the computer.'),
(18, 'Display_Problems', 'Blank screen (no video).', 'Monitor is not turned on and the monitor light is not on.', 'Turn on the monitor and check that the monitor light is on.'),
(19, 'Display_Problems', 'Monitor does not function properly when used with energy saver features.', 'Monitor without energy saver capabilities is being used with energy saver features enabled.', 'Disable monitor energy saver feature.'),
(20, 'Display_Problems', 'Dim characters.', 'The brightness and contrast controls are not set properly.', 'Adjust the monitor brightness and contrast controls.'),
(21, 'Display_Problems', 'Blurry video or requested resolution cannot be set.', 'If the graphics controller was upgraded, the correct graphics drivers may not be loaded.', 'Install the video drivers included in the upgrade kit.'),
(22, 'Display_Problems', 'The picture is broken up, rolls, jitters, or flashes.', 'The monitor connections may be incomplete or the monitor may be incorrectly adjusted.', 'Be sure the monitor cable is securely connected to the computer.'),
(23, 'Display_Problems', 'Image is not centered.', 'Position may need adjustment.', 'Press the Menu button to access the OSD menu. Select ImageControl/ Horizontal Position or Vertical Position to adjust the horizontal or vertical position of the image.'),
(24, 'Display_Problems', '“No Connection, Check Signal Cable” displays on screen.', 'Monitor video cable is disconnected.', 'Connect the video cable between the monitor and computer.'),
(25, 'Display_Problems', '“Out of Range” displays on screen.', 'Video resolution and refresh rate are set higher than what the monitor supports.', 'Restart the computer and enter Safe Mode. Change the settings to a supported setting then restart the computer so that the new settings take effect.'),
(26, 'Display_Problems', 'Vibrating or rattling noise coming from inside a CRT monitor when powered on.', 'Monitor degaussing coil has been activated.', 'None. It is normal for the degaussing coil to be activated when the monitor is powered on.'),
(27, 'Display_Problems', 'Clicking noise coming from inside a CRT monitor.', 'Electronic relays have been activated inside the monitor.', 'None. It is normal for some monitors to make a clicking noise when turned on and off, when going in and out of standby mode, and when changing resolutions.'),
(28, 'Display_Problems', 'High pitched noise coming from inside a flat panel monitor.', 'Brightness and/or contrast settings are too high.', 'Lower brightness and/or contrast settings.'),
(29, 'Audio_Problems', 'Sound cuts in and out.', 'Processor resources are being used by other open applications.', 'Shut down all open processor-intensive applications.'),
(30, 'Audio_Problems', 'Sound does not come out of the speaker or headphones.', 'Software volume control is turned down.', 'Double-click the Speaker icon on the taskbar, then make sure that Mute is not selected and use the volume slider to adjust the volume.'),
(31, 'Audio_Problems', 'Sound from headphones is not clear or muffled.', 'Headphones are plugged into the rear audio output connector. The rear audio output connector is for powered audio devices and is not designed for headphone use.', 'Plug the headphones into the headphone connector on the front of the computer.'),
(32, 'Audio_Problems', 'Computer appears to be locked up while recording audio.', 'The hard disk may be full.', 'Before recording, make sure there is enough free space on the hard disk. You can also try recording the audio file in a compressed format.'),
(33, 'Printer_Problems', 'Printer will not print.', 'Printer is not turned on and online.', 'Turn the printer on and make sure it is online.'),
(34, 'Printer_Problems', 'Printer will not turn on.', 'The cables may not be connected properly.', 'Reconnect all cables and check the power cord and electrical outlet.'),
(35, 'Printer_Problems', 'Printer prints garbled information.', 'The correct printer driver for the application is not installed.', 'Install the correct printer driver for the application.'),
(36, 'Printer_Problems', 'Printer is offline.', 'The printer may be out of paper.', 'Check the paper tray and refill it if it is empty. Select online.'),
(37, 'Keyboard_&_Mouse_Problems', 'Keyboard commands and typing are not recognized by the computer.', 'Program in use has stopped responding to commands.', 'Shut down your computer using the mouse and then restart the computer.'),
(38, 'Keyboard_&_Mouse_Problems', 'Cursor will not move using the arrow keys on the keypad.', 'The Num Lock key may be on.', 'Press the Num Lock key. The Num Lock light should not be on if you want to use the arrow keys. The Num Lock key can be disabled (or enabled) in Computer Setup.'),
(39, 'Keyboard_&_Mouse_Problems', 'Mouse does not respond to movement or is too slow.', 'Mouse connector is not properly plugged into the back of the computer.', 'Shut down the computer using the keyboard. 1. Press the Ctrl and Esc keys at the same time (or press the Windows logo key) to display the Start menu. 2. Use the up or down arrow key to select Shut Down and then press the Enter key. 3. Use the up or down a'),
(40, 'Keyboard_&_Mouse_Problems', 'Mouse will only move vertically, horizontally, or movement is jerky.', 'Mouse roller ball is dirty.', 'Remove roller ball cover from the bottom of the mouse and clean it with a mouse cleaning kit available from most computer stores.'),
(41, 'Hardware_Installation_Problems', 'A new device is not recognized as part of the system.', 'Device is not seated or connected properly.', 'Ensure that the device is properly and securely connected and that pins in the connector are not bent down.'),
(42, 'Hardware_Installation_Problems', 'Computer will not start.', 'Wrong memory modules were used in the upgrade or memory modules were installed in the wrong location.', 'Review the documentation that came with the system to determine if you are using the correct memory modules and to verify the proper installation.'),
(43, 'Hardware_Installation_Problems', 'Power LED flashes Red five times, once every second, followed by a two second pause, and the computer beeps five times.', 'Memory is installed incorrectly or is bad.', '1. Reseat DIMMs. Power on the system. 2. Replace DIMMs one at a time to isolate the faulty module. 3. Replace third-party memory with HP memory. 4. Replace the system board.'),
(44, 'Hardware_Installation_Problems', 'Power LED flashes Red six times, once every second, followed by a two second pause, and the computer beeps six times.', 'Graphics card is not seated properly or is bad, or system board is bad.', 'For systems with a graphics card: 1. Reseat the graphics card. Power on the system. 2. Replace the graphics card. 3. Replace the system board. For systems with integrated graphics, replace the system board.'),
(45, 'Network_Problems', 'Wake-on-LAN feature is not functioning.', 'Wake-on-LAN is not enabled.', 'Enable Wake-on-LAN. 1. Select Start > Control Panel. 2. Double-click Network Connections. 3. Double-click Local Area Connection. 4. Click Properties. 5. Click Configure. 6. Click the Power Management tab, then select the check box to Allow this device to '),
(46, 'Network_Problems', 'Network driver does not detect network controller.', 'Network controller is disabled.', '1. Run Computer Setup and enable network controller. 2. Enable the network controller in the operating system via Device Manager.'),
(47, 'Network_Problems', 'Network status link light never flashes.', 'Network controller is not set up properly.', 'Check for the device status within Windows, such as Device Manager for driver load and the Network Connections applet within Windows for link status.'),
(48, 'Network_Problems', 'Diagnostics reports a failure.', 'The cable is attached to the incorrect connector.', 'Ensure that the cable is attached to the correct connector.'),
(49, 'Network_Problems', 'Diagnostics passes, but the computer does not communicate with the network.', 'Network drivers are not loaded, or driver parameters do not match current configuration.', 'Make sure the network drivers are loaded and that the driver parameters match the configuration of the network controller.'),
(50, 'Network_Problems', 'Network controller stopped working when an expansion board was added to the computer.', 'Network controller interrupt is shared with an expansion board.', 'Under the Computer Setup Advanced menu, change the resource settings for the board.'),
(51, 'Network_Problems', 'Network controller stops working without apparent cause.', 'The files containing the network drivers are corrupted.', 'Reinstall the network drivers, using the Restore Plus! CD.'),
(52, 'Network_Problems', 'New network card will not boot.', 'New network card may be defective or may not meet industry-standard specifications.', 'Install a working, industry-standard NIC, or change the boot sequence to boot from another source.'),
(53, 'Network_Problems', 'Cannot connect to network server when attempting Remote System Installation.', 'The network controller is not configured properly.', 'Verify Network Connectivity, that a DHCP Server is present, and that the Remote System Installation Server contains the NIC drivers for your NIC.'),
(54, 'Network_Problems', 'System setup utility reports unprogrammed EEPROM.', 'Unprogrammed EEPROM.', 'Contact an authorized service provider.'),
(55, 'Memory_Problems', 'System will not boot or does not function properly after installing additional memory modules.', 'Memory module is not the correct type or speed grade for the system or the new memory module is not seated properly.', 'Replace module with the correct industry-standard device for the computer.'),
(56, 'Memory_Problems', 'Out of memory error.', 'Memory configuration may not be set up correctly.', 'Use the Device Manager to check memory configuration.'),
(57, 'Memory_Problems', 'Memory count during POST is wrong.', 'The memory modules may not be installed correctly.', 'Check that the memory modules have been installed correctly and that proper modules are used.'),
(58, 'Memory_Problems', 'Insufficient memory error during operation.', 'You have run out of memory for the application.', 'Check the memory requirements for the application or add more memory to the computer.'),
(59, 'Processor_Problems', 'Poor performance is experienced.', 'Processor is hot.', '1. Make sure the airflow to the computer is not blocked. 2. Make sure the fans are connected and working properly (some fans only operate when needed). 3. Make sure the processor heatsink is installed properly.'),
(60, 'Processor_Problems', 'Power LED flashes Red three times, once every second, followed by a two second pause.', 'Processor is not seated properly or not installed.', '1. Check to see that the processor is present. 2. Reseat the processor.'),
(61, 'DVD_Problems', 'System will not boot from CD-ROM or DVD drive.', 'Removable Media Boot is disabled in the Computer Setup utility.', 'Run the Computer Setup utility and enable booting to removable media in Storage > Storage Options. Ensure IDE CD-ROM is enabled in Storage > Boot Order.'),
(62, 'DVD_Problems', 'CD-ROM or DVD devices are not detected or driver is not loaded.', 'Drive is not connected properly or not properly configured.', 'See the documentation that came with the optional device.'),
(63, 'DVD_Problems', 'Movie will not play in the DVD drive.', 'Movie may be regionalized for a different country.', 'See the documentation that came with the DVD drive.'),
(64, 'DVD_Problems', 'Cannot eject compact disc (tray-load unit).', 'Disc not properly seated in the drive.', 'Turn off the computer and insert a thin metal rod into the emergency eject hole and push firmly. Slowly pull the tray out from the drive until the tray is fully extended, then remove the disc.'),
(65, 'DVD_Problems', 'CD-ROM, CD-RW, DVD-ROM, or DVD-R/RW drive cannot read a disc or takes too long to start.', 'Media has been inserted upside down.', 'Re-insert the Media with the label facing up.'),
(66, 'DVD_Problems', 'Recording audio CDs is difficult or impossible.', 'Wrong or poor quality media type.', '1. Try using a slower speed when recording. 2. Verify that you are using the correct media for the drive. 3. Try a different brand of media. Quality varies widely between manufacturers.');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE IF NOT EXISTS `laptop` (
  `id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `causes` varchar(255) NOT NULL,
  `solution` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `category`, `problem`, `causes`, `solution`) VALUES
(1, 'General_Problems', 'Computer will not respond to USB keyboard or mouse.', 'Computer is in standby mode.', 'Press the power button to resume from standby mode.'),
(2, 'General_Problems', 'Computer appears locked up and will not turn off when the power button is pressed.', 'Software control of the power switch is not functional.', 'Press and hold the power button for at least four seconds until the computer turns off.'),
(3, 'General_Problems', 'Cursor will not move using the arrow keys on the keypad.', 'The Num Lock key may be on.', 'Press the Num Lock key. The Num Lock light should not be on if you want to use the arrow keys. The Num Lock key can be disabled (or enabled) in Computer Setup.'),
(4, 'General_Problems', 'System does not power on and the LEDs on the front of the computer are not flashing.', 'System unable to power on.', 'Press and hold the power button for less than 4 seconds. If the hard drive LED turns green, then: 1. Check that the voltage selector, located on the rear of the power supply on some models, is set to the appropriate voltage. Proper voltage setting depends'),
(5, 'Power_Supply_Problems', 'Power supply shuts down intermittently.', 'Power supply will not turn on because of internal power supply fault.', 'Contact an authorized service provider to replace the power supply.'),
(6, 'Power_Supply_Problems', 'Computer powered off automatically', 'A fan may be blocked or not turning. OR The heatsink is not properly attached to the processor.', 'Ensure that the computer air vents are not blocked and the processor cooling fan is running.'),
(7, 'Diskette_Problems', 'Diskette drive light stays on.', 'Diskette is incorrectly inserted.', 'Remove diskette and reinsert.'),
(8, 'Diskette_Problems', 'Drive not found.', 'Removable drive is not seated properly.', 'Reseat the drive.'),
(9, 'Diskette_Problems', 'Diskette drive cannot write to a diskette.', 'Diskette is not formatted.', 'Format the diskette. 1. From Windows Explorer select the disk (A) drive. 2. Right-click the drive letter and select Format. 3. Select the desired options, and click Start to begin formatting the diskette.'),
(10, 'Diskette_Problems', '“Invalid system disk” message is displayed.', 'Diskette error has occurred.', 'Restart the computer by pressing the power button.'),
(11, 'Hard_Drive_Problems', 'Hard drive error occurs.', 'Hard disk has bad sectors or has failed.', '1. In Windows XP, right-click Start, click Explore, and select a drive. Select File > Properties > Tools. Under Error-checking, click Check Now. 2. Use a utility to locate and block usage of bad sectors. If necessary, reformat the hard disk.'),
(12, 'Hard_Drive_Problems', 'Disk transaction problem.', 'Either the directory structure is bad or there is a problem with a file.', 'In Windows XP, right-click Start, click Explore, and select a drive. Select File > Properties > Tools. Under Error-checking, click Check Now.'),
(13, 'Hard_Drive_Problems', 'Drive not found (identified).', 'Cable could be loose.', 'Check cable connections.'),
(14, 'Hard_Drive_Problems', 'Nonsystem disk/NTLDR missing message.', 'The system is trying to start from a diskette that is not bootable.', 'Remove the diskette from the diskette drive.'),
(15, 'Hard_Drive_Problems', 'Computer will not start.', 'Hard drive is damaged.', 'Observe if the front panel Power LED is blinking RED and if any beeps are heard. See Appendix A, “POST Error Messages” to determine possible causes for the'),
(16, 'Hard_Drive_Problems', 'Computer seems to be locked up.', 'Program in use has stopped responding to commands.', 'Attempt the normal Windows “Shut Down” procedure. If this fails, press the power button for four or more seconds to turn off the power. To restart the computer, press the power button again.'),
(17, 'Multibay_Problems', 'Drive not found.', 'You attempted to hot plug a removable hard drive that has DriveLock security enabled.', 'Shut down Windows and turn off the computer. Insert the drive into the MultiBay, if it is not already inserted. Turn on the computer.'),
(18, 'Display_Problems', 'Blank screen (no video).', 'Monitor is not turned on and the monitor light is not on.', 'Turn on the monitor and check that the monitor light is on.'),
(19, 'Display_Problems', 'Monitor does not function properly when used with energy saver features.', 'Monitor without energy saver capabilities is being used with energy saver features enabled.', 'Disable monitor energy saver feature.'),
(20, 'Display_Problems', 'Dim characters.', 'The brightness and contrast controls are not set properly.', 'Adjust the monitor brightness and contrast controls.'),
(21, 'Display_Problems', 'Blurry video or requested resolution cannot be set.', 'If the graphics controller was upgraded, the correct graphics drivers may not be loaded.', 'Install the video drivers included in the upgrade kit.'),
(22, 'Display_Problems', 'The picture is broken up, rolls, jitters, or flashes.', 'The monitor connections may be incomplete or the monitor may be incorrectly adjusted.', 'Be sure the monitor cable is securely connected to the computer.'),
(23, 'Display_Problems', 'Image is not centered.', 'Position may need adjustment.', 'Press the Menu button to access the OSD menu. Select ImageControl/ Horizontal Position or Vertical Position to adjust the horizontal or vertical position of the image.'),
(24, 'Display_Problems', '“No Connection, Check Signal Cable” displays on screen.', 'Monitor video cable is disconnected.', 'Connect the video cable between the monitor and computer.'),
(25, 'Display_Problems', '“Out of Range” displays on screen.', 'Video resolution and refresh rate are set higher than what the monitor supports.', 'Restart the computer and enter Safe Mode. Change the settings to a supported setting then restart the computer so that the new settings take effect.'),
(26, 'Display_Problems', 'Vibrating or rattling noise coming from inside a CRT monitor when powered on.', 'Monitor degaussing coil has been activated.', 'None. It is normal for the degaussing coil to be activated when the monitor is powered on.'),
(27, 'Display_Problems', 'Clicking noise coming from inside a CRT monitor.', 'Electronic relays have been activated inside the monitor.', 'None. It is normal for some monitors to make a clicking noise when turned on and off, when going in and out of standby mode, and when changing resolutions.'),
(28, 'Display_Problems', 'High pitched noise coming from inside a flat panel monitor.', 'Brightness and/or contrast settings are too high.', 'Lower brightness and/or contrast settings.'),
(29, 'Audio_Problems', 'Sound cuts in and out.', 'Processor resources are being used by other open applications.', 'Shut down all open processor-intensive applications.'),
(30, 'Audio_Problems', 'Sound does not come out of the speaker or headphones.', 'Software volume control is turned down.', 'Double-click the Speaker icon on the taskbar, then make sure that Mute is not selected and use the volume slider to adjust the volume.'),
(31, 'Audio_Problems', 'Sound from headphones is not clear or muffled.', 'Headphones are plugged into the rear audio output connector. The rear audio output connector is for powered audio devices and is not designed for headphone use.', 'Plug the headphones into the headphone connector on the front of the computer.'),
(32, 'Audio_Problems', 'Computer appears to be locked up while recording audio.', 'The hard disk may be full.', 'Before recording, make sure there is enough free space on the hard disk. You can also try recording the audio file in a compressed format.'),
(33, 'Printer_Problems', 'Printer will not print.', 'Printer is not turned on and online.', 'Turn the printer on and make sure it is online.'),
(34, 'Printer_Problems', 'Printer will not turn on.', 'The cables may not be connected properly.', 'Reconnect all cables and check the power cord and electrical outlet.'),
(35, 'Printer_Problems', 'Printer prints garbled information.', 'The correct printer driver for the application is not installed.', 'Install the correct printer driver for the application.'),
(36, 'Printer_Problems', 'Printer is offline.', 'The printer may be out of paper.', 'Check the paper tray and refill it if it is empty. Select online.'),
(37, 'Keyboard_&_Mouse_Problems', 'Keyboard commands and typing are not recognized by the computer.', 'Program in use has stopped responding to commands.', 'Shut down your computer using the mouse and then restart the computer.'),
(38, 'Keyboard_&_Mouse_Problems', 'Cursor will not move using the arrow keys on the keypad.', 'The Num Lock key may be on.', 'Press the Num Lock key. The Num Lock light should not be on if you want to use the arrow keys. The Num Lock key can be disabled (or enabled) in Computer Setup.'),
(39, 'Keyboard_&_Mouse_Problems', 'Mouse does not respond to movement or is too slow.', 'Mouse connector is not properly plugged into the back of the computer.', 'Shut down the computer using the keyboard. 1. Press the Ctrl and Esc keys at the same time (or press the Windows logo key) to display the Start menu. 2. Use the up or down arrow key to select Shut Down and then press the Enter key. 3. Use the up or down a'),
(40, 'Keyboard_&_Mouse_Problems', 'Mouse will only move vertically, horizontally, or movement is jerky.', 'Mouse roller ball is dirty.', 'Remove roller ball cover from the bottom of the mouse and clean it with a mouse cleaning kit available from most computer stores.'),
(41, 'Hardware_Installation_Problems', 'A new device is not recognized as part of the system.', 'Device is not seated or connected properly.', 'Ensure that the device is properly and securely connected and that pins in the connector are not bent down.'),
(42, 'Hardware_Installation_Problems', 'Computer will not start.', 'Wrong memory modules were used in the upgrade or memory modules were installed in the wrong location.', 'Review the documentation that came with the system to determine if you are using the correct memory modules and to verify the proper installation.'),
(43, 'Hardware_Installation_Problems', 'Power LED flashes Red five times, once every second, followed by a two second pause, and the computer beeps five times.', 'Memory is installed incorrectly or is bad.', '1. Reseat DIMMs. Power on the system. 2. Replace DIMMs one at a time to isolate the faulty module. 3. Replace third-party memory with HP memory. 4. Replace the system board.'),
(44, 'Hardware_Installation_Problems', 'Power LED flashes Red six times, once every second, followed by a two second pause, and the computer beeps six times.', 'Graphics card is not seated properly or is bad, or system board is bad.', 'For systems with a graphics card: 1. Reseat the graphics card. Power on the system. 2. Replace the graphics card. 3. Replace the system board. For systems with integrated graphics, replace the system board.'),
(45, 'Network_Problems', 'Wake-on-LAN feature is not functioning.', 'Wake-on-LAN is not enabled.', 'Enable Wake-on-LAN. 1. Select Start > Control Panel. 2. Double-click Network Connections. 3. Double-click Local Area Connection. 4. Click Properties. 5. Click Configure. 6. Click the Power Management tab, then select the check box to Allow this device to '),
(46, 'Network_Problems', 'Network driver does not detect network controller.', 'Network controller is disabled.', '1. Run Computer Setup and enable network controller. 2. Enable the network controller in the operating system via Device Manager.'),
(47, 'Network_Problems', 'Network status link light never flashes.', 'Network controller is not set up properly.', 'Check for the device status within Windows, such as Device Manager for driver load and the Network Connections applet within Windows for link status.'),
(48, 'Network_Problems', 'Diagnostics reports a failure.', 'The cable is attached to the incorrect connector.', 'Ensure that the cable is attached to the correct connector.'),
(49, 'Network_Problems', 'Diagnostics passes, but the computer does not communicate with the network.', 'Network drivers are not loaded, or driver parameters do not match current configuration.', 'Make sure the network drivers are loaded and that the driver parameters match the configuration of the network controller.'),
(50, 'Network_Problems', 'Network controller stopped working when an expansion board was added to the computer.', 'Network controller interrupt is shared with an expansion board.', 'Under the Computer Setup Advanced menu, change the resource settings for the board.'),
(51, 'Network_Problems', 'Network controller stops working without apparent cause.', 'The files containing the network drivers are corrupted.', 'Reinstall the network drivers, using the Restore Plus! CD.'),
(52, 'Network_Problems', 'New network card will not boot.', 'New network card may be defective or may not meet industry-standard specifications.', 'Install a working, industry-standard NIC, or change the boot sequence to boot from another source.'),
(53, 'Network_Problems', 'Cannot connect to network server when attempting Remote System Installation.', 'The network controller is not configured properly.', 'Verify Network Connectivity, that a DHCP Server is present, and that the Remote System Installation Server contains the NIC drivers for your NIC.'),
(54, 'Network_Problems', 'System setup utility reports unprogrammed EEPROM.', 'Unprogrammed EEPROM.', 'Contact an authorized service provider.'),
(55, 'Memory_Problems', 'System will not boot or does not function properly after installing additional memory modules.', 'Memory module is not the correct type or speed grade for the system or the new memory module is not seated properly.', 'Replace module with the correct industry-standard device for the computer.'),
(56, 'Memory_Problems', 'Out of memory error.', 'Memory configuration may not be set up correctly.', 'Use the Device Manager to check memory configuration.'),
(57, 'Memory_Problems', 'Memory count during POST is wrong.', 'The memory modules may not be installed correctly.', 'Check that the memory modules have been installed correctly and that proper modules are used.'),
(58, 'Memory_Problems', 'Insufficient memory error during operation.', 'You have run out of memory for the application.', 'Check the memory requirements for the application or add more memory to the computer.'),
(59, 'Processor_Problems', 'Poor performance is experienced.', 'Processor is hot.', '1. Make sure the airflow to the computer is not blocked. 2. Make sure the fans are connected and working properly (some fans only operate when needed). 3. Make sure the processor heatsink is installed properly.'),
(60, 'Processor_Problems', 'Power LED flashes Red three times, once every second, followed by a two second pause.', 'Processor is not seated properly or not installed.', '1. Check to see that the processor is present. 2. Reseat the processor.'),
(61, 'DVD_Problems', 'System will not boot from CD-ROM or DVD drive.', 'Removable Media Boot is disabled in the Computer Setup utility.', 'Run the Computer Setup utility and enable booting to removable media in Storage > Storage Options. Ensure IDE CD-ROM is enabled in Storage > Boot Order.'),
(62, 'DVD_Problems', 'CD-ROM or DVD devices are not detected or driver is not loaded.', 'Drive is not connected properly or not properly configured.', 'See the documentation that came with the optional device.'),
(63, 'DVD_Problems', 'Movie will not play in the DVD drive.', 'Movie may be regionalized for a different country.', 'See the documentation that came with the DVD drive.'),
(64, 'DVD_Problems', 'Cannot eject compact disc (tray-load unit).', 'Disc not properly seated in the drive.', 'Turn off the computer and insert a thin metal rod into the emergency eject hole and push firmly. Slowly pull the tray out from the drive until the tray is fully extended, then remove the disc.'),
(65, 'DVD_Problems', 'CD-ROM, CD-RW, DVD-ROM, or DVD-R/RW drive cannot read a disc or takes too long to start.', 'Media has been inserted upside down.', 'Re-insert the Media with the label facing up.'),
(66, 'DVD_Problems', 'Recording audio CDs is difficult or impossible.', 'Wrong or poor quality media type.', '1. Try using a slower speed when recording. 2. Verify that you are using the correct media for the drive. 3. Try a different brand of media. Quality varies widely between manufacturers.');

-- --------------------------------------------------------

--
-- Table structure for table `notepad`
--

CREATE TABLE IF NOT EXISTS `notepad` (
  `id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `causes` varchar(255) NOT NULL,
  `solution` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notepad`
--

INSERT INTO `notepad` (`id`, `category`, `problem`, `causes`, `solution`) VALUES
(1, 'General_Problems', 'Computer will not respond to USB keyboard or mouse.', 'Computer is in standby mode.', 'Press the power button to resume from standby mode.'),
(2, 'General_Problems', 'Computer appears locked up and will not turn off when the power button is pressed.', 'Software control of the power switch is not functional.', 'Press and hold the power button for at least four seconds until the computer turns off.'),
(3, 'General_Problems', 'Cursor will not move using the arrow keys on the keypad.', 'The Num Lock key may be on.', 'Press the Num Lock key. The Num Lock light should not be on if you want to use the arrow keys. The Num Lock key can be disabled (or enabled) in Computer Setup.'),
(4, 'General_Problems', 'System does not power on and the LEDs on the front of the computer are not flashing.', 'System unable to power on.', 'Press and hold the power button for less than 4 seconds. If the hard drive LED turns green, then: 1. Check that the voltage selector, located on the rear of the power supply on some models, is set to the appropriate voltage. Proper voltage setting depends'),
(5, 'Power_Supply_Problems', 'Power supply shuts down intermittently.', 'Power supply will not turn on because of internal power supply fault.', 'Contact an authorized service provider to replace the power supply.'),
(6, 'Power_Supply_Problems', 'Computer powered off automatically', 'A fan may be blocked or not turning. OR The heatsink is not properly attached to the processor.', 'Ensure that the computer air vents are not blocked and the processor cooling fan is running.'),
(7, 'Diskette_Problems', 'Diskette drive light stays on.', 'Diskette is incorrectly inserted.', 'Remove diskette and reinsert.'),
(8, 'Diskette_Problems', 'Drive not found.', 'Removable drive is not seated properly.', 'Reseat the drive.'),
(9, 'Diskette_Problems', 'Diskette drive cannot write to a diskette.', 'Diskette is not formatted.', 'Format the diskette. 1. From Windows Explorer select the disk (A) drive. 2. Right-click the drive letter and select Format. 3. Select the desired options, and click Start to begin formatting the diskette.'),
(10, 'Diskette_Problems', '“Invalid system disk” message is displayed.', 'Diskette error has occurred.', 'Restart the computer by pressing the power button.'),
(11, 'Hard_Drive_Problems', 'Hard drive error occurs.', 'Hard disk has bad sectors or has failed.', '1. In Windows XP, right-click Start, click Explore, and select a drive. Select File > Properties > Tools. Under Error-checking, click Check Now. 2. Use a utility to locate and block usage of bad sectors. If necessary, reformat the hard disk.'),
(12, 'Hard_Drive_Problems', 'Disk transaction problem.', 'Either the directory structure is bad or there is a problem with a file.', 'In Windows XP, right-click Start, click Explore, and select a drive. Select File > Properties > Tools. Under Error-checking, click Check Now.'),
(13, 'Hard_Drive_Problems', 'Drive not found (identified).', 'Cable could be loose.', 'Check cable connections.'),
(14, 'Hard_Drive_Problems', 'Nonsystem disk/NTLDR missing message.', 'The system is trying to start from a diskette that is not bootable.', 'Remove the diskette from the diskette drive.'),
(15, 'Hard_Drive_Problems', 'Computer will not start.', 'Hard drive is damaged.', 'Observe if the front panel Power LED is blinking RED and if any beeps are heard. See Appendix A, “POST Error Messages” to determine possible causes for the'),
(16, 'Hard_Drive_Problems', 'Computer seems to be locked up.', 'Program in use has stopped responding to commands.', 'Attempt the normal Windows “Shut Down” procedure. If this fails, press the power button for four or more seconds to turn off the power. To restart the computer, press the power button again.'),
(17, 'Multibay_Problems', 'Drive not found.', 'You attempted to hot plug a removable hard drive that has DriveLock security enabled.', 'Shut down Windows and turn off the computer. Insert the drive into the MultiBay, if it is not already inserted. Turn on the computer.'),
(18, 'Display_Problems', 'Blank screen (no video).', 'Monitor is not turned on and the monitor light is not on.', 'Turn on the monitor and check that the monitor light is on.'),
(19, 'Display_Problems', 'Monitor does not function properly when used with energy saver features.', 'Monitor without energy saver capabilities is being used with energy saver features enabled.', 'Disable monitor energy saver feature.'),
(20, 'Display_Problems', 'Dim characters.', 'The brightness and contrast controls are not set properly.', 'Adjust the monitor brightness and contrast controls.'),
(21, 'Display_Problems', 'Blurry video or requested resolution cannot be set.', 'If the graphics controller was upgraded, the correct graphics drivers may not be loaded.', 'Install the video drivers included in the upgrade kit.'),
(22, 'Display_Problems', 'The picture is broken up, rolls, jitters, or flashes.', 'The monitor connections may be incomplete or the monitor may be incorrectly adjusted.', 'Be sure the monitor cable is securely connected to the computer.'),
(23, 'Display_Problems', 'Image is not centered.', 'Position may need adjustment.', 'Press the Menu button to access the OSD menu. Select ImageControl/ Horizontal Position or Vertical Position to adjust the horizontal or vertical position of the image.'),
(24, 'Display_Problems', '“No Connection, Check Signal Cable” displays on screen.', 'Monitor video cable is disconnected.', 'Connect the video cable between the monitor and computer.'),
(25, 'Display_Problems', '“Out of Range” displays on screen.', 'Video resolution and refresh rate are set higher than what the monitor supports.', 'Restart the computer and enter Safe Mode. Change the settings to a supported setting then restart the computer so that the new settings take effect.'),
(26, 'Display_Problems', 'Vibrating or rattling noise coming from inside a CRT monitor when powered on.', 'Monitor degaussing coil has been activated.', 'None. It is normal for the degaussing coil to be activated when the monitor is powered on.'),
(27, 'Display_Problems', 'Clicking noise coming from inside a CRT monitor.', 'Electronic relays have been activated inside the monitor.', 'None. It is normal for some monitors to make a clicking noise when turned on and off, when going in and out of standby mode, and when changing resolutions.'),
(28, 'Display_Problems', 'High pitched noise coming from inside a flat panel monitor.', 'Brightness and/or contrast settings are too high.', 'Lower brightness and/or contrast settings.'),
(29, 'Audio_Problems', 'Sound cuts in and out.', 'Processor resources are being used by other open applications.', 'Shut down all open processor-intensive applications.'),
(30, 'Audio_Problems', 'Sound does not come out of the speaker or headphones.', 'Software volume control is turned down.', 'Double-click the Speaker icon on the taskbar, then make sure that Mute is not selected and use the volume slider to adjust the volume.'),
(31, 'Audio_Problems', 'Sound from headphones is not clear or muffled.', 'Headphones are plugged into the rear audio output connector. The rear audio output connector is for powered audio devices and is not designed for headphone use.', 'Plug the headphones into the headphone connector on the front of the computer.'),
(32, 'Audio_Problems', 'Computer appears to be locked up while recording audio.', 'The hard disk may be full.', 'Before recording, make sure there is enough free space on the hard disk. You can also try recording the audio file in a compressed format.'),
(33, 'Printer_Problems', 'Printer will not print.', 'Printer is not turned on and online.', 'Turn the printer on and make sure it is online.'),
(34, 'Printer_Problems', 'Printer will not turn on.', 'The cables may not be connected properly.', 'Reconnect all cables and check the power cord and electrical outlet.'),
(35, 'Printer_Problems', 'Printer prints garbled information.', 'The correct printer driver for the application is not installed.', 'Install the correct printer driver for the application.'),
(36, 'Printer_Problems', 'Printer is offline.', 'The printer may be out of paper.', 'Check the paper tray and refill it if it is empty. Select online.'),
(37, 'Keyboard_&_Mouse_Problems', 'Keyboard commands and typing are not recognized by the computer.', 'Program in use has stopped responding to commands.', 'Shut down your computer using the mouse and then restart the computer.'),
(38, 'Keyboard_&_Mouse_Problems', 'Cursor will not move using the arrow keys on the keypad.', 'The Num Lock key may be on.', 'Press the Num Lock key. The Num Lock light should not be on if you want to use the arrow keys. The Num Lock key can be disabled (or enabled) in Computer Setup.'),
(39, 'Keyboard_&_Mouse_Problems', 'Mouse does not respond to movement or is too slow.', 'Mouse connector is not properly plugged into the back of the computer.', 'Shut down the computer using the keyboard. 1. Press the Ctrl and Esc keys at the same time (or press the Windows logo key) to display the Start menu. 2. Use the up or down arrow key to select Shut Down and then press the Enter key. 3. Use the up or down a'),
(40, 'Keyboard_&_Mouse_Problems', 'Mouse will only move vertically, horizontally, or movement is jerky.', 'Mouse roller ball is dirty.', 'Remove roller ball cover from the bottom of the mouse and clean it with a mouse cleaning kit available from most computer stores.'),
(41, 'Hardware_Installation_Problems', 'A new device is not recognized as part of the system.', 'Device is not seated or connected properly.', 'Ensure that the device is properly and securely connected and that pins in the connector are not bent down.'),
(42, 'Hardware_Installation_Problems', 'Computer will not start.', 'Wrong memory modules were used in the upgrade or memory modules were installed in the wrong location.', 'Review the documentation that came with the system to determine if you are using the correct memory modules and to verify the proper installation.'),
(43, 'Hardware_Installation_Problems', 'Power LED flashes Red five times, once every second, followed by a two second pause, and the computer beeps five times.', 'Memory is installed incorrectly or is bad.', '1. Reseat DIMMs. Power on the system. 2. Replace DIMMs one at a time to isolate the faulty module. 3. Replace third-party memory with HP memory. 4. Replace the system board.'),
(44, 'Hardware_Installation_Problems', 'Power LED flashes Red six times, once every second, followed by a two second pause, and the computer beeps six times.', 'Graphics card is not seated properly or is bad, or system board is bad.', 'For systems with a graphics card: 1. Reseat the graphics card. Power on the system. 2. Replace the graphics card. 3. Replace the system board. For systems with integrated graphics, replace the system board.'),
(45, 'Network_Problems', 'Wake-on-LAN feature is not functioning.', 'Wake-on-LAN is not enabled.', 'Enable Wake-on-LAN. 1. Select Start > Control Panel. 2. Double-click Network Connections. 3. Double-click Local Area Connection. 4. Click Properties. 5. Click Configure. 6. Click the Power Management tab, then select the check box to Allow this device to '),
(46, 'Network_Problems', 'Network driver does not detect network controller.', 'Network controller is disabled.', '1. Run Computer Setup and enable network controller. 2. Enable the network controller in the operating system via Device Manager.'),
(47, 'Network_Problems', 'Network status link light never flashes.', 'Network controller is not set up properly.', 'Check for the device status within Windows, such as Device Manager for driver load and the Network Connections applet within Windows for link status.'),
(48, 'Network_Problems', 'Diagnostics reports a failure.', 'The cable is attached to the incorrect connector.', 'Ensure that the cable is attached to the correct connector.'),
(49, 'Network_Problems', 'Diagnostics passes, but the computer does not communicate with the network.', 'Network drivers are not loaded, or driver parameters do not match current configuration.', 'Make sure the network drivers are loaded and that the driver parameters match the configuration of the network controller.'),
(50, 'Network_Problems', 'Network controller stopped working when an expansion board was added to the computer.', 'Network controller interrupt is shared with an expansion board.', 'Under the Computer Setup Advanced menu, change the resource settings for the board.'),
(51, 'Network_Problems', 'Network controller stops working without apparent cause.', 'The files containing the network drivers are corrupted.', 'Reinstall the network drivers, using the Restore Plus! CD.'),
(52, 'Network_Problems', 'New network card will not boot.', 'New network card may be defective or may not meet industry-standard specifications.', 'Install a working, industry-standard NIC, or change the boot sequence to boot from another source.'),
(53, 'Network_Problems', 'Cannot connect to network server when attempting Remote System Installation.', 'The network controller is not configured properly.', 'Verify Network Connectivity, that a DHCP Server is present, and that the Remote System Installation Server contains the NIC drivers for your NIC.'),
(54, 'Network_Problems', 'System setup utility reports unprogrammed EEPROM.', 'Unprogrammed EEPROM.', 'Contact an authorized service provider.'),
(55, 'Memory_Problems', 'System will not boot or does not function properly after installing additional memory modules.', 'Memory module is not the correct type or speed grade for the system or the new memory module is not seated properly.', 'Replace module with the correct industry-standard device for the computer.'),
(56, 'Memory_Problems', 'Out of memory error.', 'Memory configuration may not be set up correctly.', 'Use the Device Manager to check memory configuration.'),
(57, 'Memory_Problems', 'Memory count during POST is wrong.', 'The memory modules may not be installed correctly.', 'Check that the memory modules have been installed correctly and that proper modules are used.'),
(58, 'Memory_Problems', 'Insufficient memory error during operation.', 'You have run out of memory for the application.', 'Check the memory requirements for the application or add more memory to the computer.'),
(59, 'Processor_Problems', 'Poor performance is experienced.', 'Processor is hot.', '1. Make sure the airflow to the computer is not blocked. 2. Make sure the fans are connected and working properly (some fans only operate when needed). 3. Make sure the processor heatsink is installed properly.'),
(60, 'Processor_Problems', 'Power LED flashes Red three times, once every second, followed by a two second pause.', 'Processor is not seated properly or not installed.', '1. Check to see that the processor is present. 2. Reseat the processor.'),
(61, 'DVD_Problems', 'System will not boot from CD-ROM or DVD drive.', 'Removable Media Boot is disabled in the Computer Setup utility.', 'Run the Computer Setup utility and enable booting to removable media in Storage > Storage Options. Ensure IDE CD-ROM is enabled in Storage > Boot Order.'),
(62, 'DVD_Problems', 'CD-ROM or DVD devices are not detected or driver is not loaded.', 'Drive is not connected properly or not properly configured.', 'See the documentation that came with the optional device.'),
(63, 'DVD_Problems', 'Movie will not play in the DVD drive.', 'Movie may be regionalized for a different country.', 'See the documentation that came with the DVD drive.'),
(64, 'DVD_Problems', 'Cannot eject compact disc (tray-load unit).', 'Disc not properly seated in the drive.', 'Turn off the computer and insert a thin metal rod into the emergency eject hole and push firmly. Slowly pull the tray out from the drive until the tray is fully extended, then remove the disc.'),
(65, 'DVD_Problems', 'CD-ROM, CD-RW, DVD-ROM, or DVD-R/RW drive cannot read a disc or takes too long to start.', 'Media has been inserted upside down.', 'Re-insert the Media with the label facing up.'),
(66, 'DVD_Problems', 'Recording audio CDs is difficult or impossible.', 'Wrong or poor quality media type.', '1. Try using a slower speed when recording. 2. Verify that you are using the correct media for the drive. 3. Try a different brand of media. Quality varies widely between manufacturers.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `phone`, `gender`, `city`, `address`, `image`) VALUES
(1, 'Deepak Kashyap', 'deep@gmail.com', 'kashyap', '9914461429 ', 'male', 'Patiala', '#457, Sec-67, Patiala', 'Penguins.jpg'),
(2, 'Brahmleen Kaur', 'karlish@gmail.com', 'karlish', '9876546769 ', 'female', 'Mohali', '#R-111 Sec-74, Mohali', '30745-little-cute-baby-big-laugh.jpg'),
(3, 'Gurpreet Kaur', 'gurpreet@gmail.com', 'gurpreet', '9876543211 ', 'female', 'Chandigarh ', '#112, Sec-21, Chandigarh', '954889_435542826541772_946043363_n - Copy.jpg'),
(4, 'Babbar Singh', 'babbar@gmail.com', 'babbar', '4568899222 ', 'male', 'Bathinda', '#666, Modal Town, Bathinda', 'Lighthouse.jpg'),
(5, 'Romika', 'romika@gmail.com', 'romika', '9876543210 ', 'female', 'Malerkotla', '#1003, Green Field, Malerkotla', '2011-cute-babies-wallpaper.jpeg'),
(6, 'Veerpal Kaur', 'veerpal@gmail.com', 'veerpal', '674923456 ', 'female', 'Bathinda ', '#909, Ind.Area, Bathinda', 'Lovely-Baby-Girl.jpg'),
(7, 'romi', 'romi@gmail.com', 'romi', '9914656894 ', 'male', 'gtg ', 'gkkj,', '249334_406089552820433_1350284198_n - Copy.jpg'),
(9, '', '', '', ' ', '', ' ', '', '');
