#!/bin/bash

BALIPHYDIR=$HOME/Devel/bali-phy/jj/

for i in {1..5} ; do
    cp ${BALIPHYDIR}/tests/prob_prog/demos/${i}/Model.hs Demo${i}.hs
done

cp ${BALIPHYDIR}/tests/prob_prog/regression/LinearRegression.hs .
cp ${BALIPHYDIR}/tests/prob_prog/sample_tree/3/sample.hs random_tree.hs
cp ${BALIPHYDIR}/tests/prob_prog/infer_tree/1/Model.hs InferTreeAlignment.hs

#brittany --write-mode=inplace InferTreeAlignment.hs --columns 80
fourmolu --column-limit 120 -i M7.hs
