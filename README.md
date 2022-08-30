# GVM player

**Audiovisual representation of video streams together with multiple audio tracks.**

The GVM player was developed in the context of the Georgian Vocal Music (GVM) project.1) It was initially designed for the multimedia structure of the GVM dataset2), consisting of video-, conventional stereo-, headset-, and larynx microphone recordings, all synchronized to a common time code. It is built on the pywebaudioplayer developed by [Pauwels and Sandler (2018)](https://github.com/resfahani/GVM-Interface#references), which was extended by a component (written in the PHP and Javascript languages) to synchronously play back a video stream. The combination of the video of the singers with multiple audio tracks for which  the volumes can individually be chosen, facilitates the perception of the polyphonic structure  of the songs and allows the generation of various „pseudo ensemble tracks“ to sing along or to study the interaction of the singers with each other.


# Getting started
The GVM interface offers different types of audio-video visualizations. In the following, the descriptions of each visualization mode are summarized.

### Display modes

To accommodate different audiovisual representation scenarios, for details see Scherbaum et al. (2023), we have implemented five different display modes of the GVM player. These can be accessed through what we refer to as the GVM Interface3).  From the top panel of the GVM interface’s main menu3),  different songs and display modes can be selected.  This menu is automatically built on startup, based on the collection of audio and video tracks stored in the “data“ directory and the types of which are recognized by their extension (see README.txt in the “data“ directory).  For illustration, we use five selected songs from a collection for which the raw field recordings were presented by  Scherbaum et al. (2019) and for which the original (unprocessed) recordings are easily accessible through the web-based trackswitch interface (Werner et al., 2017).4)  


### Recording Session Mode

In this display mode, the recording location, the relative position of the singers as well as their (non-verbal) communication during the recording session can be observed while listening to their performance.

### Audio Mix Mode

Selecting this mode starts the original pywebaudioplayer (Pauwels and Sandler, 2018) for the three headset microphone tracks, for which the cross talk has been somewhat reduced by using the information about the voice activity of each singer contained in the corresponding larynx microphone recording.

### F0-Trajectory Mode
In the ‚F0-trajectory Mode’, which is the most elaborate display mode implemented in the GVM player framework so far, the GVM player is started with three different display panels. The bottom panel corresponds to the interface of the pywebaudioplayer. The left top panel shows close-ups of the three singers’ faces with the lyrics of the song displayed as subtitles. To the right, the F0-trajectories (pitch tracks) are displayed together with the multi-voice note tracks for the sung notes in a “scrolling mode” where a time window of 20 seconds duration (including the actual playhead-cursor position) is shown and updated at regular intervals (similar to page turning of sheet music or scores). On startup, this display panel shows the F0-trajectories of the complete song, which during playback is replaced by the shorter time window. Further details are given in Scherbaum et al. (2023).

### Psedo-Score Mode

In this display mode, the note pitches have all been mapped to the center pitches of their corresponding pitch group, and the display of the F0-trajectories is suppressed (as an unnecessary detail in this setting). In contrast to the F0-trajectory mode which displays exactly the pitches which were sung by the singers, this mode is an interpretation of what pitch the singers might have wanted to sing, using the pitch group means as a reference.

### Karaoke Mode
In this mode, we mimic a Karaoke situation by displaying only the lyrics together with close-ups of the singer’s faces.

### Meta Information

Each recording session during the 2016 field expedition was accompanied by extensive interviews not only with the singers but also with other informants from the villages to collect contextual information regarding the background and history of the singers, local customs, etc.
Links:
1) https://www.audiolabs-erlangen.de/fau/professor/mueller/projects/gvm
2) https://www.audiolabs-erlangen.de/resources/MIR/2017-GeorgianMusic-Scherbaum
3) https://www.audiolabs-erlangen.de/resources/MIR/GVMPlayer/
4) https://www.audiolabs-erlangen.de/resources/MIR/2018-ISMIR-LBD-ThroatMics


# Installation
Use the PHP command and run the built-in web server:

php -S 127.0.0.1:8000

In the case of using a macOS, the PHP can be installed by using the brew package.

brew install php

# Citation

# References
Pauwels, Johan & Mark B. Sandler (2018). pywebaudioplayer: Bridging the gap between audio processing code in Python and attractive visualisations based on web technology. Web Audio Conference WAC-2018, September 19–21, 2018, Berlin, Germany.  [Link](https://webaudioconf.com/_data/papers/pdf/2018/2018_19.pdf)

Scherbaum, Frank,  Nana Mzhavanadze,  Sebastian Rosenzweig & Meinard Müller (2019). Multi-media recordings of traditional Georgian vocal music for computational analysis. 9th International Workshop on Folk Music Analysis, 2-4 July 2019. [Link](https://www.uni-potsdam.de/fileadmin/projects/soundscapelab/PapersMusic/2019/Scherbaum_etal_FMA2019_final.pdf)

Scherbaum, Frank, Sebastian Rosenzweig, Reza D.D. Esfahani,  Nana Mzhavanadze, Simon Schwär & Meinard Müller (2023).  Novel Representations of Traditional Georgian Vocal Music in Times of Online Access. In „Georgian Traditional Polyphony - Modern Trends and Development Perspectives“, Ed. Rusudan Tsurtsumia and Giorgi Donadze. [Link]()




