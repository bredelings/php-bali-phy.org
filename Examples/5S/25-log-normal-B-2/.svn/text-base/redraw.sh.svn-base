#!/bin/sh

for i in *.mtree ; do
    t=${i%.mtree}
    draw-tree $t.mtree --out=$t-mctree --output=svg
    draw-tree $t.mtree --out=$t-mctree
done

for i in *.ltree ; do
    t=${i%.ltree}
    draw-tree $t.ltree --layout=equal-daylight --output=svg
    draw-tree $t.ltree --layout=equal-daylight
done

