#!/bin/awk -f

BEGIN {
    #define verables
    flag=1
    begin_p=bp
    end_p=ep
    output=o
    color=c
    help=h

    #print help part
    if(h!="no"){
        print "\x1b[7mUsage:\tprint_color.awk [-v 'bp=regex'][-v 'ep=regex'][-v c=color][-v o=only]\x1b[m\x1b[m"
        print "\x1b[7m\tbp|ep is a regex match to special output row.\x1b[m\x1b[m"
        print "\x1b[7m\tcolor=black|red|green|yellow|blue|purple|cyan|white default is white\x1b[m\x1b[m"
        print "\x1b[7m\tif option 'o' equels 'only',means only output between [bp,ep]\x1b[m\x1b[m"
        print "\x1b[7m\tif option 'h' equels 'no',means don't show help infomation\x1b[m\x1b[m"
    }
}
$0 ~ begin_p { 
    flag=0
}
flag==0 {
    if(color=="black"){print "\x1b[30m",$0,"\x1b[m\x1b[m"}
    else if(color=="red"){print "\x1b[31m",$0,"\x1b[m\x1b[m"}
    else if(color=="green"){print "\x1b[32m",$0,"\x1b[m\x1b[m"}
    else if(color=="yellow"){print "\x1b[33m",$0,"\x1b[m\x1b[m"}
    else if(color=="blue"){print "\x1b[34m",$0,"\x1b[m\x1b[m"}
    else if(color=="purple"){print "\x1b[35m",$0,"\x1b[m\x1b[m"}
    else if(color=="cyan"){print "\x1b[36m",$0,"\x1b[m\x1b[m"}
    else if(color=="white"){print "\x1b[37m",$0,"\x1b[m\x1b[m"}
    else{print "\x1b[37m",$0,"\x1b[m\x1b[m"}
}
flag==1 {
    if(output!="only"){print $0}    
}
$0 ~ end_p {
    flag=1
}
