import pandas as pd
import numpy as np
import sys
a = []
a.append(sys.argv[1])
a.append(sys.argv[2])
a.append(sys.argv[3])

filename = []

filename.append(a[0][:-3]+'csv')
filename.append(a[1][:-3]+'csv')
filename.append(a[2][:-3]+'csv')


c = np.zeros(3)

data1 = pd.read_csv(filename[0],header=None,low_memory=False)
data2 = pd.read_csv(filename[1],header=None,low_memory=False)
data3 = pd.read_csv(filename[2],header=None,low_memory=False)


#d = np.log2(data1[1].values/110)*1200
#d[np.isnan(d)]=0
#d[np.isinf(d)]=0
#c[0] = np.median(d)
#d = np.log2(data2[1].values/110)*1200
#d[np.isnan(d)]=0
#d[np.isinf(d)]=0
#c[1] = np.median(d)
#d = np.log2(data3[1].values/110)*1200
#d[np.isnan(d)]=0
#d[np.isinf(d)]=0
#c[2] = np.median(d)

c[0] = np.median(data1[1].values)

c[1] = np.median(data2[1].values) 
c[2] = np.median(data3[1].values)


inds = c.argsort()


print(inds)
