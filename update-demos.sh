#!/bin/bash

for i in {1..5} ; do
    cp ~/Devel/bali-phy/git/tests/prob_prog/demos/${i}/Model.hs Demo${i}.hs
done

cp ~/Devel/bali-phy/git/tests/prob_prog/regression/LinearRegression.hs .
cp ~/Devel/bali-phy/git/tests/prob_prog/sample_tree/3/sample.hs random_tree.hs
cp ~/Devel/bali-phy/git/tests/prob_prog/infer_tree/1/Model.hs InferTreeAlignment.hs
#brittany --write-mode=inplace InferTreeAlignment.hs --columns 80
fourmolu --column-limit 120 -i M7.hs
