<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>
 
<?php echo form_open('processor/edit/'.$processor_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">Name</label></td>
            <td><input type="input" name="name" size="50" value="<?php echo $processor_item['name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Designer</label></td>
            <td><input type="input" name="designer" size="50" value="<?php echo $processor_item['designer'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Price</label></td>
            <td><input type="input" name="price" size="50" value="<?php echo $processor_item['price'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Description</label></td>
            <td><input type="input" name="description" size="50" value="<?php echo $processor_item['description'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Component</label></td>
            <td><input type="input" name="component" size="50" value="<?php echo $processor_item['component'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Cpu Type</label></td>
            <td><input type="input" name="cpuType" size="50" value="<?php echo $processor_item['cpuType'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Clock Speed</label></td>
            <td><input type="input" name="clockSpeed" size="50" value="<?php echo $processor_item['clockSpeed'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Turbomodus</label></td>
            <td><input type="input" name="turbomodus" size="50" value="<?php echo $processor_item['turbomodus'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Microarchitecture</label></td>
            <td><input type="input" name="microarchitecture" size="50" value="<?php echo $processor_item['microarchitecture'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Cooler</label></td>
            <td><input type="input" name="cooler" size="50" value="<?php echo $processor_item['cooler'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Size</label></td>
            <td><input type="input" name="size" size="50" value="<?php echo $processor_item['size'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">memoryChannels</label></td>
            <td><input type="input" name="memoryChannels" size="50" value="<?php echo $processor_item['memoryChannels'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">memoryVoltage</label></td>
            <td><input type="input" name="memoryVoltage" size="50" value="<?php echo $processor_item['memoryVoltage'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">supportedMemory</label></td>
            <td><input type="input" name="supportedMemory" size="50" value="<?php echo $processor_item['supportedMemory'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Socket</label></td>
            <td><input type="input" name="socket" size="50" value="<?php echo $processor_item['socket'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Cores</label></td>
            <td><input type="input" name="cores" size="50" value="<?php echo $processor_item['cores'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Threads</label></td>
            <td><input type="input" name="threads" size="50" value="<?php echo $processor_item['threads'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Cache</label></td>
            <td><input type="input" name="cache" size="50" value="<?php echo $processor_item['cache'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">TDP</label></td>
            <td><input type="input" name="tdp" size="50" value="<?php echo $processor_item['tdp'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">GPU</label></td>
            <td><input type="input" name="gpu" size="50" value="<?php echo $processor_item['gpu'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Multi Cpu System</label></td>
            <td><input type="input" name="multiCpuSystem" size="50" value="<?php echo $processor_item['multiCpuSystem'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Gpu Clockspeed</label></td>
            <td><input type="input" name="gpuClockspeed" size="50" value="<?php echo $processor_item['gpuClockspeed'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Bus Speed</label></td>
            <td><input type="input" name="busSpeed" size="50" value="<?php echo $processor_item['busSpeed'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="releaseDate">Release Date</label></td>
            <td><input type="input" name="releaseDate" size="50" maxlength="10" value="<?php echo $processor_item['releaseDate'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" value="<?php echo $processor_item['warranty'] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit Processor item" /></td>
        </tr>
    </table>
</form>