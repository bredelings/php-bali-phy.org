import Probability
import Tree

main = random $ do

  tree <- sample $ uniform_topology 5

  -- Place the root of the tree at node 0
  let rtree = add_root tree 0

  -- The process starts with x=0 at the root
  let root_value = 0.0

  -- xs[i] recursively depends on xs[parent i]
  rec let mu Nothing  = root_value
          mu (Just p) = xs!!p
      xs <- sample $ list [normal (mu parent_node) 1.0  | n <- nodes rtree, let parent_node = parentNode rtree n]

  return $ log_all [ write_newick rtree %% "tree", xs %% "xs" ]
