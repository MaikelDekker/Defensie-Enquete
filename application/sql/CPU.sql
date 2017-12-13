DROP TABLE IF EXISTS `processor`;
CREATE TABLE IF NOT EXISTS `processor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `designer` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `component` varchar(50) DEFAULT NULL,
  `cpuType` varchar(50) DEFAULT NULL,
  `clockSpeed` varchar(50) DEFAULT NULL,
  `turbomodus` varchar(50) DEFAULT NULL,
  `microarchitecture` varchar(50) DEFAULT NULL,
  `cooler` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `memoryChannels` varchar(50) DEFAULT NULL,
  `memoryVoltage` varchar(50) DEFAULT NULL,
  `supportedMemory` varchar(50) DEFAULT NULL,
  `socket` varchar(50) DEFAULT NULL,
  `cores` varchar(50) DEFAULT NULL,
  `threads` varchar(50) DEFAULT NULL,
  `cache` varchar(50) DEFAULT NULL,
  `tdp` varchar(50) DEFAULT NULL,
  `gpu` varchar(50) DEFAULT NULL,
  `multiCpuSystem` varchar(50) DEFAULT NULL,
  `gpuClockspeed` varchar(50) DEFAULT NULL,
  `busSpeed` varchar(50) DEFAULT NULL,
  `releaseDate` varchar(50) DEFAULT NULL,
  `warranty` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `processor` (`id`, `name`, `slug`, `designer`, `price`, `description`, `component`, `cpuType`, `clockSpeed`, `turboModus`, 
  `microarchitecture`, `cooler`,`size`, `memoryChannels`, `memoryVoltage`, `supportedMemory`, `socket`, `cores`, `threads`, `cache`, `tdp`, `gpu`, 
  `multiCpuSystem`, `gpuClockspeed`, `busSpeed`, `releaseDate`, `warranty`) VALUES
(1, 'i7 7700k', '', 'Intel', '€339', 'Newest intel i7 Processor', 'Processor', 'Core i7', '4200 Mhz', '4500 Mhz', 
  'Kaby Lake-S', 'None', '14 NM', '2', '1.2 volt - 1.35 volt', 'DDR4-2400, DDR4-2133', '1151', '4', '4', '8192 KB', '130 Watt', 
  'Intel HD Graphics 630', '1', '600 Mhz', '8000 MT/s', '01/01/2017', '36 maanden');