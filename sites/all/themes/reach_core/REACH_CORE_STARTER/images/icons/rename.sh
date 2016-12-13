# make all lower
rename 'y/A-Z/a-z/' *

# remove icon_0014_ prefix
rename 's/icon\_([0-9]+)\_/_/' *

# remove dashes and spaces
rename 'y/\-/_/' *

# remove all underscores
# from: http://magnus-k-karlsson.blogspot.com/2009/01/removing-white-spaces-in-file-name.html (for spaces)
for f in *; do mv "$f" `echo $f | tr --delete '_'`; done

