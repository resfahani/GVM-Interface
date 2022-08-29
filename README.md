# GVM-Interface
**A Interface for visualization of audio and video data.**

The interface is designed for the audio representation of the Georgian Vocal Music (GVM) dataset. The original code is developed by Pauwels and Sandler (2018) for pywebaudioplayer software. The interface is written in the PHP and Javascript languages.

# Getting started
The GVM interface offers different types of audio-video visualizations. In the following, the descriptions of each visualization mode are summarized.

### main menu
The GVM interface's man menu shows different display modes, which can be selected. 

### Record Section Mode

In this display mode, the recording location, the relative position of the singers as well as their (non-verbal) communication during the recording session can be observed while listening to their performance.

### Audio Mix Mode

Selecting this mode starts the original pywebaudioplayer (Pauwels & Sandler, 2018) for the three headset microphone tracks, for which the cross talk has been somewhat reduced by using the information about the voice activity of each singer contained in the corresponding larynx microphone recording. This mode is aimed at users who for whatever reasons are not interested in the video and want to spare themselves the overhead of the video player.

### F0-Trajectory Mode
In the ‘F0-trajectory Mode’, which is the most elaborate display mode implemented in the GVM player framework so far, the GVM player is started with three different display panels as shown in Fig. 7. The bottom panel corresponds to the Interface of the pywebaudioplayer. The left top panel shows close-ups of the three singers’ faces with the lyrics of the song displayed as subtitles. To the right, the F0-trajectories (pitch tracks) are displayed together with the multi-voice note tracks for the sung notes in a “scrolling mode” where a time window of 20 seconds duration (including the actual playhead-cursor position) is shown and updated at regular intervals (similar to page turning of sheet music or scores). On startup, this display panel shows the F0-traj:wectories of the complete song which during playback is replaced by the shorter time window.

### Psedo-Score Mode

In this display mode, the note pitches have all been mapped to the center pitches of their corresponding pitch group, and the display of the F0-trajectories is suppressed (as an unnecessary detail in this setting). In contrast to the F0-trajectory mode which displays exactly the pitches which were sung by the singers, this mode is an interpretation of what pitch the singers might have wanted to sing, using the pitch group means as a reference. 

### Karaoke Mode
In this mode, we mimic a Karaoke situation by displaying only the lyrics together with close-ups of the singer’s faces.

### Meta Information
Each recording session during the 2016 field expedition was accompanied by extensive interviews not only with the singers but also with other informants from the villages to collect contextual information regarding the background and history of the singers, about local customs, etc.

# Installation
Use the PHP command and run the built-in web server:

php -S 127.0.0.1:8000

In the case of using a macOS, the PHP can be installed by using the brew package.

brew install php

# Citation

# References

Pauwels, J., and Sandler, M. B. (2018). pywebaudioplayer: Bridging the gap between audio processing code in Python and attractive visualisations based on web technology. Web Audio Conference WAC-2018, September 19–21, 2018, Berlin, Germany. [Link](https://webaudioconf.com/_data/papers/pdf/2018/2018_19.pdf)



