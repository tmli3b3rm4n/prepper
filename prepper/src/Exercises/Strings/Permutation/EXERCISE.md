String Question #1 – Generate all permutations of any given String

This is one of the most common interview questions given, and will be good to know by heart. Because your first
instinct is to look for an elegant algorithm (which is a good habit), the question may initially seem daunting.
The trick here is to realize that generating all permutations of a given String of size n always results in a O(n!)
time, both iteratively and recursively.

Just in case you need a refresher ! is a factorial.  Factorials are very simple things. They're just products,
indicated by an exclamation mark. For instance, "four factorial" is written as "4!" and means 1×2×3×4 = 24. In general,
 n! ("enn factorial") means the product of all the whole numbers from 1 to n; that is, n! = 1×2×3×...×n.

Consider the string “abc”. The first character ‘a’ can be placed in 3 slots – first, second and third. ‘b’ can be
placed in only 2 slots, since one slot is already taken by ‘a’. ‘c’ has no choice but to go into the remaining slot.
Hence the total permutations are 3 x 2 x 1 = 6 = 3!. Correspondingly, there are 6 permutations: “abc”, “acb”, “bac”,
“bca”, “cab” and “cba”.



String Question #2 – Determine if one string is a permutation of another
The brute-force method, and simplest, is to compute and store all possible string permutations in an array, and iterate
through, checking. However, as discussed above, this results in an terrific O(n!) time – unacceptable.

Instead, the optimal approach here is to realize that considering specific ordering adds an unnecessary layer of
complexity since all permutations of a given string have the same number of characters as the original string. We can
solve this problem by counting characters.