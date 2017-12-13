<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('motherboard/edit/'.$motherboard_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">Name</label></td>
            <td><input type="input" name="name" size="50" value="<?php echo $motherboard_item['name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Designer</label></td>
            <td><input type="input" name="designer" size="50" value="<?php echo $motherboard_item['designer'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Description</label></td>
            <td><textarea maxlength="5000" name="description" rows="3" cols="52"><?php echo $motherboard_item['description'] ?></textarea></td>
        </tr>
        <tr>
            <td><label for="title">Price</label></td>
            <td><input type="input" name="price" size="50" value="<?php echo $motherboard_item['price'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Formfactor</label></td>
            <td><input type="input" name="formfactor" size="50" value="<?php echo $motherboard_item['formfactor'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Socket</label></td>
            <td><input type="input" name="socket" size="50" value="<?php echo $motherboard_item['socket'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Chipset</label></td>
            <td><input type="input" name="chipset" size="50" value="<?php echo $motherboard_item['chipset'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">PCIe x1</label></td>
            <td><input type="input" name="pciex1" size="50" value="<?php echo $motherboard_item['pciex1'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">PCIe 16</label></td>
            <td><input type="input" name="pciex16" size="50" value="<?php echo $motherboard_item['pciex16'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">UEFI BIOS</label></td>
            <td><input type="input" name="uefibios" size="50" value="<?php echo $motherboard_item['uefibios'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Use</label></td>
            <td><input type="input" name="use" size="50" value="<?php echo $motherboard_item['use'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Power</label></td>
            <td><input type="input" name="power" size="50" value="<?php echo $motherboard_item['power'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Max. Memory</label></td>
            <td><input type="input" name="maxmemory" size="50" value="<?php echo $motherboard_item['maxmemory'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Memory Slots</label></td>
            <td><input type="input" name="memoryslots" size="50" value="<?php echo $motherboard_item['memoryslots'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Memory Ranks</label></td>
            <td><input type="input" name="memoryranks" size="50" value="<?php echo $motherboard_item['memoryranks'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Memory Controller</label></td>
            <td><input type="input" name="memorycontroller" size="50" value="<?php echo $motherboard_item['memorycontroller'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">SATA Controller</label></td>
            <td><input type="input" name="satacontroller" size="50" value="<?php echo $motherboard_item['satacontroller'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">USB Controller</label></td>
            <td><input type="input" name="usbcontroller" size="50" value="<?php echo $motherboard_item['usbcontroller'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Supported CPU</label></td>
            <td><input type="input" name="supportedcpu" size="50" value="<?php echo $motherboard_item['supportedcpu'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Supported Type</label></td>
            <td><input type="input" name="supportedtype" size="50" value="<?php echo $motherboard_item['supportedtype'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Supported Standard</label></td>
            <td><input type="input" name="supportedstandard" size="50" value="<?php echo $motherboard_item['supportedstandard'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Channels</label></td>
            <td><input type="input" name="channels" size="50" value="<?php echo $motherboard_item['channels'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Max. Datadensity</label></td>
            <td><input type="input" name="maxdatadensity" size="50" value="<?php echo $motherboard_item['maxdatadensity'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Keyboard</label></td>
            <td><input type="input" name="keyboard" size="50" value="<?php echo $motherboard_item['keyboard'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Mice</label></td>
            <td><input type="input" name="mice" size="50" value="<?php echo $motherboard_item['mice'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">USB 3.0</label></td>
            <td><input type="input" name="usb3" size="50" value="<?php echo $motherboard_item['usb3'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">USB 3.C</label></td>
            <td><input type="input" name="usb3c" size="50" value="<?php echo $motherboard_item['usb3c'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">USB 2.0</label></td>
            <td><input type="input" name="usb2" size="50" value="<?php echo $motherboard_item['usb2'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">VGA</label></td>
            <td><input type="input" name="vga" size="50" value="<?php echo $motherboard_item['vga'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">DVI-D</label></td>
            <td><input type="input" name="dvid" size="50" value="<?php echo $motherboard_item['dvid'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">HDMI</label></td>
            <td><input type="input" name="hdmi" size="50" value="<?php echo $motherboard_item['hdmi'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Microphone</label></td>
            <td><input type="input" name="microphone" size="50" value="<?php echo $motherboard_item['microphone'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Line In</label></td>
            <td><input type="input" name="linein" size="50" value="<?php echo $motherboard_item['linein'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Line Out</label></td>
            <td><input type="input" name="lineout" size="50" value="<?php echo $motherboard_item['lineout'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">RJ 45</label></td>
            <td><input type="input" name="rj45" size="50" value="<?php echo $motherboard_item['rj45'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">M.2</label></td>
            <td><input type="input" name="m2" size="50" value="<?php echo $motherboard_item['m2'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">M.2 Key</label></td>
            <td><input type="input" name="m2key" size="50" value="<?php echo $motherboard_item['m2key'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">M.2 Interface</label></td>
            <td><input type="input" name="m2interface" size="50" value="<?php echo $motherboard_item['m2interface'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">M.2 Length</label></td>
            <td><input type="input" name="m2length" size="50" value="<?php echo $motherboard_item['m2length'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">PWM Fan</label></td>
            <td><input type="input" name="pwmfan" size="50" value="<?php echo $motherboard_item['pwmfan'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Sounds</label></td>
            <td><input type="input" name="sounds" size="50" value="<?php echo $motherboard_item['sounds'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">LAN</label></td>
            <td><input type="input" name="lan" size="50" value="<?php echo $motherboard_item['lan'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Features</label></td>
            <td><input type="input" name="features" size="50" value="<?php echo $motherboard_item['features'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="releasedate">Release Date</label></td>
            <td><input type="input" name="releasedate" size="50" maxlength="10" value="<?php echo $motherboard_item['releasedate'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Information</label></td>
            <td><textarea maxlength="5000" name="information" rows="3" cols="52"><?php echo $motherboard_item['information'] ?></textarea></td>
        </tr>
        <tr>
            <td><label for="title">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" value="<?php echo $motherboard_item['warranty'] ?>" /></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit motherboard item" /></td>
        </tr>
    </table>
</form>