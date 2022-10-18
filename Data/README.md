## Data Structure

The data folder has separate folders for each recorded song. The folder name begins with the GVMID and song name, such as "GVM009_BatonebisNanina_Web". The files in each folder consist of mp3, mp4, and pdf files. Following is an explanation of the structure of each file.

### Audio files
For each recorded song, there are four files in MP3 format in the folder with the following name structure: **"\$GVMID\$\_\$NAME\$\_\$CHANNEL\$"**. 

The **"\$GVMID\$"** is the project name and song number. The **"\$NAME\$"** is the song name. The **"\$CHANNEL\$"** states the Bass voice, Middle voice, Top voice, or all voices. The following is an abbreviation list of **"\$CHANNEL\$"**:

**BVCM"** is an abbreviation for **"Bass VoICE MONO."**

**"MVCM"** is an abbreviation for **"Middle VoiCe Mono"**

**"TVCM"** is an abbreviation for **"Top VoiCe Mono"**

**"ALLS"** is an abbreviation for **"ALL voices Stereo"**

These files are the input for the Pywebaudioplayer audio software for playing, waveform visualization, and audio control. The bass, middle, and top voice files are recognized based on their abbreviation and assigned to a specific track in the software.

### Video files
There are four video files in MP4 format with the following abbreviation names: 

**"KAR"** stands for **"KARaoke"**

**"GCP"** stands for **"Group Ceneter Pitches"**

**"PT"** stands for **"Pitch Track"**

**"REC"** stands for **"RECordings session"**

These files are played in different modes which is explained in the [README](https://github.com/resfahani/GVM-Player/blob/master/README.md) file of the main code.

### Information file
Information file is a PDF file that contains information such as the date and location of the recording, singers, and background information (Info file).

