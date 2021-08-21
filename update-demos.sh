#!/bin/bash

for i in {1..5} ; do
    cp ~/Devel/bali-phy/git/tests/prob_prog/demos/${i}/Main.hs Demo${i}.hs
done

cp ~/Devel/bali-phy/git/tests/prob_prog/regression/LinearRegression.hs .
cp ~/Devel/bali-phy/git/tests/prob_prog/sample_tree/3/sample.hs random_tree.hs
cp ~/Devel/bali-phy/git/tests/prob_prog/infer_tree/1/Main.hs InferTreeAlignment.hs
