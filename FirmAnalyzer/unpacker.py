import subprocess


def runCommand(command):
    '''
    Run shell command
    '''
    p = subprocess.Popen(command,
                         stdout=subprocess.PIPE,
                         stderr=subprocess.PIPE,
                         shell=True)
    o, e = p.communicate()
    return o, e


def unpackFirmware(firmwarePath):
    '''
    unpack the firmware using Binwalk
    '''
    FirmUnpackDir = '~/FirmUnpack/'
    unpackFirmwarePath = FirmUnpackDir + firmwarePath.split(
        '/')[-1] + '.upacked'
