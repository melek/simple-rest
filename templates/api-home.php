<?php 
/**
 * A simple template
 */?>

<p>Welcome to the Tarot Notes API!</p>
<p>This API is GET only to return tarot card JSON data.</p>
<p>The only defined API route is <code>/cards/</code>. You can use multiple filters after /cards/, such as:
<dl>
   <dt>Integer Index</dt>
   <dd>/cards/single/0 - Returns the Fool card.</dd>
   <dd>/cards/single/23 - Returns the Two of Wands.</dd>
   <dd>Integer index begins with the Fool at 0, rolls into the Ace of Wands at 22, and continues the pattern up through Cups, Swords, and Pentacles, ending at the King of Pendacles at 77. Further cards such as 'The Master' in the Osho Zen deck are not defined in the default definition. Numbers greated than 77 will return the modulus of 78 and the number. </dd>
   <dt>Suit Filters</dt>
   <dd>/cards/majors/ or /cards/m/ - Returns all the Major cards.</dd>
   <dd>/cards/minors/ or /cards/n/ - Returns all the Minor cards.</dd>
   <dd>/cards/swords/ or /cards/s/ - Returns all the Swords cards.</dd>
   <dd>Suit filters return only cards matching the suit identified.</dd>
   <dt>Value Filters</dt>
   <dd>/cards/1/ or /cards/ones/ - Returns the Magician and all Aces.</dd>
   <dd>/cards/aces/ - Returns all four aces.</dd>
   <dd>/cards/11/ - Returns the Justice Card and all 4 Pages.</dd>
   <dd>/cards/kings/ or cards/k/ - Returns all four Kings.</dd>
   <dd>Value filters return only cards which return the given value. The Court Cards are assigned numberical values 11 (page), 12 (knight), 13 (queen), and 14 (king), but are also given letter-based filters to prevent overlap with the major arcana.</dd>
   <dt>Mixing Filters</dt>
   <dd>/cards/minors/eights/ or /cards/n/8/ - returns all the 8s from the minor arcana.</dd>
   <dd>/cards/s/w/k - returns the King of Swords and King of Wands.</dd>
</dl>
<table>
   <thead>
      <tr>
         <td>Filter</td>
         <td>Short Names</td>
         <td>Long Names</td>
         <td>Filter Type</td>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>Major Arcana</td>
         <td>m</td>
         <td>majors</td>
         <td>Suit</td>
      </tr>
      <tr>
         <td>Minor Arcana</td>
         <td>n</td>
         <td>minors</td>
         <td>Suit</td>
      </tr>

   <tr>
         <td>Wands</td>
         <td>w</td>
         <td>wands<br>batons</td>
         <td>Suit</td>
      </tr>
      <tr>
         <td>Cups</td>
         <td>c</td>
         <td>cups</td>
         <td>Suit</td>
      </tr>
      <tr>
         <td>Swords</td>
         <td>s</td>
         <td>swords</td>
         <td>Suit</td>
      </tr>
      <tr>
         <td>Pentacles</td>
         <td>p</td>
         <td>pentacles<br>disks<br>discs</td>
         <td>Suit</td>
      </tr>
      <tr>
         <td>Aces</td>
         <td>a</td>
         <td>aces</td>
         <td>Number*</td>
      </tr>
      <tr>
         <td>Ones</td>
         <td>1</td>
         <td>ones</td>
         <td>Number</td>
      </tr>
      <tr>
         <td colspan=4 style="font-style:italic;"> Pattern repeats for twos, threes, fours, fives, sixes, sevens, eights, nines, tens</td>
      </tr>
      <tr>
         <td>Kings</td>
         <td>k</td>
         <td>kings</td>
         <td>Number*</td>
      </tr>
      <tr>
         <td colspan=4 style="font-style:italic;"> Pattern repeats for Queens(q), Knights(kn), and Pages(pa)</td>
      </tr>
</table>
