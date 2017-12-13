<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('processor/create'); ?>    
    <table>
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="input" name="name" size="50" placeholder="Celeron G3930"></td>
        </tr>
        <tr>
            <td><label for="designer">Designer</label></td>
            <td><input type="input" name="designer" size="50" placeholder="Intel"></td>
        </tr>
        <tr>
            <td><label for="price">Price</label></td>
            <td><input type="input" name="price" size="50" value="€"></td>
        </tr>
        <tr>
            <td><label for="description">Description</label></td>
            <td><input type="input" name="description" size="50" value="€"></td>
        </tr>
        <tr>
            <td><label for="component">Component</label></td>
            <td><input type="input" name="component" size="50" value="€"></td>
        </tr>
        <tr>
            <td><label for="cpuType">CPU Type</label></td>
            <td><input type="input" name="cpuType" size="50" value="€"></td>
        </tr>
        <tr>
            <td><label for="clockSpeed">Clock Speed</label></td>
            <td><input type="input" name="clockSpeed" size="50" placeholder="2,9 Ghz"></td>
        </tr>
        <tr>
            <td><label for="turbomodus">Turbomodus</label></td>
            <td><input type="input" name="turbomodus" size="50" placeholder="3,5 Ghz"></td>
        </tr>
        <tr>
            <td><label for="microarchitecture">Microarchitecture</label></td>
            <td><input type="input" name="microarchitecture" size="50" placeholder="Coffee Lake"></td>
        </tr>
        <tr>
            <td><label for="cooler">Cooler</label></td>
            <td><input type="input" name="cooler" size="50" placeholder="Yes"></td>
        </tr>
        <tr>
            <td><label for="size">size</label></td>
            <td><input type="input" name="size" size="50" placeholder="14 nm"></td>
        </tr>
        <tr>
            <td><label for="memoryChannels">memoryChannels</label></td>
            <td><input type="input" name="memoryChannels" size="50" value="€"></td>
        </tr>
        <tr>
            <td><label for="memoryVoltage">memoryVoltage</label></td>
            <td><input type="input" name="memoryVoltage" size="50" value="€"></td>
        </tr>
        <tr>
            <td><label for="supportedMemory">supportedMemory</label></td>
            <td><input type="input" name="supportedMemory" size="50" value="€"></td>
        </tr>
        <tr>
            <td><label for="socket">Socket</label></td>
            <td><input type="input" name="socket" size="50" placeholder="1151"></td>
        </tr>
        <tr>
            <td><label for="cores">Cores</label></td>
            <td><input type="input" name="cores" size="50" placeholder="2"/></td>
        </tr>
        <tr>
            <td><label for="threads">Threads</label></td>
            <td><input type="input" name="threads" size="50" placeholder="4"></td>
        </tr>
        <tr>
            <td><label for="cache">Cache</label></td>
            <td><input type="input" name="cache" size="50" placeholder="8 MB"/></td>
        </tr>
        <tr>
            <td><label for="tdp">TDP</label></td>
            <td><input type="input" name="tdp" size="50" placeholder="65 Watt"></td>
        </tr>
        <tr>
            <td><label for="gpu">GPU</label></td>
            <td><input type="input" name="gpu" size="50" placeholder="Intel HD Graphics 630"></td>
        </tr>
        <tr>
            <td><label for="multiCpuSystem">Multi Cpu System</label></td>
            <td><input type="input" name="multiCpuSystem" size="50" value="€"></td>
        </tr>
        <tr>
            <td><label for="gpuClockspeed">Gpu Clock Speed</label></td>
            <td><input type="input" name="gpuClockspeed" size="50" value="€"></td>
        </tr>
        <tr>
            <td><label for="busSpeed">Bus Speed</label></td>
            <td><input type="input" name="busSpeed" size="50" value="€"></td>
        </tr>
        <tr>
            <td><label for="releaseDate">Release Date</label></td>
            <td><input type="input" name="releaseDate" size="50" maxlength="10" value="DD/MM/YY"></td>
        </tr>
        <tr>
            <td><label for="warranty">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" placeholder="24 Maanden"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add new Processor"></td>
        </tr>
    </table>    
</form>