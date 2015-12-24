This is one of the most common interview questions given, and will be good to know by heart. Because your first
instinct is to look for an elegant algorithm (which is a good habit), the question may initially seem daunting.
The trick here is to realize that generating all permutations of a given String of size n always results in a O(n!)
time, both iteratively and recursively.

Consider the string “abc”. The first character ‘a’ can be placed in 3 slots – first, second and third. ‘b’ can be
placed in only 2 slots, since one slot is already taken by ‘a’. ‘c’ has no choice but to go into the remaining slot.
Hence the total permutations are 3 x 2 x 1 = 6 = 3!. Correspondingly, there are 6 permutations: “abc”, “acb”, “bac”,
“bca”, “cab” and “cba”.

