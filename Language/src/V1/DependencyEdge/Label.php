<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1\DependencyEdge;

use UnexpectedValueException;

/**
 * The parse label enum for the token.
 *
 * Protobuf type <code>google.cloud.language.v1.DependencyEdge.Label</code>
 */
class Label
{
    /**
     * Unknown
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Abbreviation modifier
     *
     * Generated from protobuf enum <code>ABBREV = 1;</code>
     */
    const ABBREV = 1;
    /**
     * Adjectival complement
     *
     * Generated from protobuf enum <code>ACOMP = 2;</code>
     */
    const ACOMP = 2;
    /**
     * Adverbial clause modifier
     *
     * Generated from protobuf enum <code>ADVCL = 3;</code>
     */
    const ADVCL = 3;
    /**
     * Adverbial modifier
     *
     * Generated from protobuf enum <code>ADVMOD = 4;</code>
     */
    const ADVMOD = 4;
    /**
     * Adjectival modifier of an NP
     *
     * Generated from protobuf enum <code>AMOD = 5;</code>
     */
    const AMOD = 5;
    /**
     * Appositional modifier of an NP
     *
     * Generated from protobuf enum <code>APPOS = 6;</code>
     */
    const APPOS = 6;
    /**
     * Attribute dependent of a copular verb
     *
     * Generated from protobuf enum <code>ATTR = 7;</code>
     */
    const ATTR = 7;
    /**
     * Auxiliary (non-main) verb
     *
     * Generated from protobuf enum <code>AUX = 8;</code>
     */
    const AUX = 8;
    /**
     * Passive auxiliary
     *
     * Generated from protobuf enum <code>AUXPASS = 9;</code>
     */
    const AUXPASS = 9;
    /**
     * Coordinating conjunction
     *
     * Generated from protobuf enum <code>CC = 10;</code>
     */
    const CC = 10;
    /**
     * Clausal complement of a verb or adjective
     *
     * Generated from protobuf enum <code>CCOMP = 11;</code>
     */
    const CCOMP = 11;
    /**
     * Conjunct
     *
     * Generated from protobuf enum <code>CONJ = 12;</code>
     */
    const CONJ = 12;
    /**
     * Clausal subject
     *
     * Generated from protobuf enum <code>CSUBJ = 13;</code>
     */
    const CSUBJ = 13;
    /**
     * Clausal passive subject
     *
     * Generated from protobuf enum <code>CSUBJPASS = 14;</code>
     */
    const CSUBJPASS = 14;
    /**
     * Dependency (unable to determine)
     *
     * Generated from protobuf enum <code>DEP = 15;</code>
     */
    const DEP = 15;
    /**
     * Determiner
     *
     * Generated from protobuf enum <code>DET = 16;</code>
     */
    const DET = 16;
    /**
     * Discourse
     *
     * Generated from protobuf enum <code>DISCOURSE = 17;</code>
     */
    const DISCOURSE = 17;
    /**
     * Direct object
     *
     * Generated from protobuf enum <code>DOBJ = 18;</code>
     */
    const DOBJ = 18;
    /**
     * Expletive
     *
     * Generated from protobuf enum <code>EXPL = 19;</code>
     */
    const EXPL = 19;
    /**
     * Goes with (part of a word in a text not well edited)
     *
     * Generated from protobuf enum <code>GOESWITH = 20;</code>
     */
    const GOESWITH = 20;
    /**
     * Indirect object
     *
     * Generated from protobuf enum <code>IOBJ = 21;</code>
     */
    const IOBJ = 21;
    /**
     * Marker (word introducing a subordinate clause)
     *
     * Generated from protobuf enum <code>MARK = 22;</code>
     */
    const MARK = 22;
    /**
     * Multi-word expression
     *
     * Generated from protobuf enum <code>MWE = 23;</code>
     */
    const MWE = 23;
    /**
     * Multi-word verbal expression
     *
     * Generated from protobuf enum <code>MWV = 24;</code>
     */
    const MWV = 24;
    /**
     * Negation modifier
     *
     * Generated from protobuf enum <code>NEG = 25;</code>
     */
    const NEG = 25;
    /**
     * Noun compound modifier
     *
     * Generated from protobuf enum <code>NN = 26;</code>
     */
    const NN = 26;
    /**
     * Noun phrase used as an adverbial modifier
     *
     * Generated from protobuf enum <code>NPADVMOD = 27;</code>
     */
    const NPADVMOD = 27;
    /**
     * Nominal subject
     *
     * Generated from protobuf enum <code>NSUBJ = 28;</code>
     */
    const NSUBJ = 28;
    /**
     * Passive nominal subject
     *
     * Generated from protobuf enum <code>NSUBJPASS = 29;</code>
     */
    const NSUBJPASS = 29;
    /**
     * Numeric modifier of a noun
     *
     * Generated from protobuf enum <code>NUM = 30;</code>
     */
    const NUM = 30;
    /**
     * Element of compound number
     *
     * Generated from protobuf enum <code>NUMBER = 31;</code>
     */
    const NUMBER = 31;
    /**
     * Punctuation mark
     *
     * Generated from protobuf enum <code>P = 32;</code>
     */
    const P = 32;
    /**
     * Parataxis relation
     *
     * Generated from protobuf enum <code>PARATAXIS = 33;</code>
     */
    const PARATAXIS = 33;
    /**
     * Participial modifier
     *
     * Generated from protobuf enum <code>PARTMOD = 34;</code>
     */
    const PARTMOD = 34;
    /**
     * The complement of a preposition is a clause
     *
     * Generated from protobuf enum <code>PCOMP = 35;</code>
     */
    const PCOMP = 35;
    /**
     * Object of a preposition
     *
     * Generated from protobuf enum <code>POBJ = 36;</code>
     */
    const POBJ = 36;
    /**
     * Possession modifier
     *
     * Generated from protobuf enum <code>POSS = 37;</code>
     */
    const POSS = 37;
    /**
     * Postverbal negative particle
     *
     * Generated from protobuf enum <code>POSTNEG = 38;</code>
     */
    const POSTNEG = 38;
    /**
     * Predicate complement
     *
     * Generated from protobuf enum <code>PRECOMP = 39;</code>
     */
    const PRECOMP = 39;
    /**
     * Preconjunt
     *
     * Generated from protobuf enum <code>PRECONJ = 40;</code>
     */
    const PRECONJ = 40;
    /**
     * Predeterminer
     *
     * Generated from protobuf enum <code>PREDET = 41;</code>
     */
    const PREDET = 41;
    /**
     * Prefix
     *
     * Generated from protobuf enum <code>PREF = 42;</code>
     */
    const PREF = 42;
    /**
     * Prepositional modifier
     *
     * Generated from protobuf enum <code>PREP = 43;</code>
     */
    const PREP = 43;
    /**
     * The relationship between a verb and verbal morpheme
     *
     * Generated from protobuf enum <code>PRONL = 44;</code>
     */
    const PRONL = 44;
    /**
     * Particle
     *
     * Generated from protobuf enum <code>PRT = 45;</code>
     */
    const PRT = 45;
    /**
     * Associative or possessive marker
     *
     * Generated from protobuf enum <code>PS = 46;</code>
     */
    const PS = 46;
    /**
     * Quantifier phrase modifier
     *
     * Generated from protobuf enum <code>QUANTMOD = 47;</code>
     */
    const QUANTMOD = 47;
    /**
     * Relative clause modifier
     *
     * Generated from protobuf enum <code>RCMOD = 48;</code>
     */
    const RCMOD = 48;
    /**
     * Complementizer in relative clause
     *
     * Generated from protobuf enum <code>RCMODREL = 49;</code>
     */
    const RCMODREL = 49;
    /**
     * Ellipsis without a preceding predicate
     *
     * Generated from protobuf enum <code>RDROP = 50;</code>
     */
    const RDROP = 50;
    /**
     * Referent
     *
     * Generated from protobuf enum <code>REF = 51;</code>
     */
    const REF = 51;
    /**
     * Remnant
     *
     * Generated from protobuf enum <code>REMNANT = 52;</code>
     */
    const REMNANT = 52;
    /**
     * Reparandum
     *
     * Generated from protobuf enum <code>REPARANDUM = 53;</code>
     */
    const REPARANDUM = 53;
    /**
     * Root
     *
     * Generated from protobuf enum <code>ROOT = 54;</code>
     */
    const ROOT = 54;
    /**
     * Suffix specifying a unit of number
     *
     * Generated from protobuf enum <code>SNUM = 55;</code>
     */
    const SNUM = 55;
    /**
     * Suffix
     *
     * Generated from protobuf enum <code>SUFF = 56;</code>
     */
    const SUFF = 56;
    /**
     * Temporal modifier
     *
     * Generated from protobuf enum <code>TMOD = 57;</code>
     */
    const TMOD = 57;
    /**
     * Topic marker
     *
     * Generated from protobuf enum <code>TOPIC = 58;</code>
     */
    const TOPIC = 58;
    /**
     * Clause headed by an infinite form of the verb that modifies a noun
     *
     * Generated from protobuf enum <code>VMOD = 59;</code>
     */
    const VMOD = 59;
    /**
     * Vocative
     *
     * Generated from protobuf enum <code>VOCATIVE = 60;</code>
     */
    const VOCATIVE = 60;
    /**
     * Open clausal complement
     *
     * Generated from protobuf enum <code>XCOMP = 61;</code>
     */
    const XCOMP = 61;
    /**
     * Name suffix
     *
     * Generated from protobuf enum <code>SUFFIX = 62;</code>
     */
    const SUFFIX = 62;
    /**
     * Name title
     *
     * Generated from protobuf enum <code>TITLE = 63;</code>
     */
    const TITLE = 63;
    /**
     * Adverbial phrase modifier
     *
     * Generated from protobuf enum <code>ADVPHMOD = 64;</code>
     */
    const ADVPHMOD = 64;
    /**
     * Causative auxiliary
     *
     * Generated from protobuf enum <code>AUXCAUS = 65;</code>
     */
    const AUXCAUS = 65;
    /**
     * Helper auxiliary
     *
     * Generated from protobuf enum <code>AUXVV = 66;</code>
     */
    const AUXVV = 66;
    /**
     * Rentaishi (Prenominal modifier)
     *
     * Generated from protobuf enum <code>DTMOD = 67;</code>
     */
    const DTMOD = 67;
    /**
     * Foreign words
     *
     * Generated from protobuf enum <code>FOREIGN = 68;</code>
     */
    const FOREIGN = 68;
    /**
     * Keyword
     *
     * Generated from protobuf enum <code>KW = 69;</code>
     */
    const KW = 69;
    /**
     * List for chains of comparable items
     *
     * Generated from protobuf enum <code>LIST = 70;</code>
     */
    const PBLIST = 70;
    /**
     * Nominalized clause
     *
     * Generated from protobuf enum <code>NOMC = 71;</code>
     */
    const NOMC = 71;
    /**
     * Nominalized clausal subject
     *
     * Generated from protobuf enum <code>NOMCSUBJ = 72;</code>
     */
    const NOMCSUBJ = 72;
    /**
     * Nominalized clausal passive
     *
     * Generated from protobuf enum <code>NOMCSUBJPASS = 73;</code>
     */
    const NOMCSUBJPASS = 73;
    /**
     * Compound of numeric modifier
     *
     * Generated from protobuf enum <code>NUMC = 74;</code>
     */
    const NUMC = 74;
    /**
     * Copula
     *
     * Generated from protobuf enum <code>COP = 75;</code>
     */
    const COP = 75;
    /**
     * Dislocated relation (for fronted/topicalized elements)
     *
     * Generated from protobuf enum <code>DISLOCATED = 76;</code>
     */
    const DISLOCATED = 76;
    /**
     * Aspect marker
     *
     * Generated from protobuf enum <code>ASP = 77;</code>
     */
    const ASP = 77;
    /**
     * Genitive modifier
     *
     * Generated from protobuf enum <code>GMOD = 78;</code>
     */
    const GMOD = 78;
    /**
     * Genitive object
     *
     * Generated from protobuf enum <code>GOBJ = 79;</code>
     */
    const GOBJ = 79;
    /**
     * Infinitival modifier
     *
     * Generated from protobuf enum <code>INFMOD = 80;</code>
     */
    const INFMOD = 80;
    /**
     * Measure
     *
     * Generated from protobuf enum <code>MES = 81;</code>
     */
    const MES = 81;
    /**
     * Nominal complement of a noun
     *
     * Generated from protobuf enum <code>NCOMP = 82;</code>
     */
    const NCOMP = 82;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::ABBREV => 'ABBREV',
        self::ACOMP => 'ACOMP',
        self::ADVCL => 'ADVCL',
        self::ADVMOD => 'ADVMOD',
        self::AMOD => 'AMOD',
        self::APPOS => 'APPOS',
        self::ATTR => 'ATTR',
        self::AUX => 'AUX',
        self::AUXPASS => 'AUXPASS',
        self::CC => 'CC',
        self::CCOMP => 'CCOMP',
        self::CONJ => 'CONJ',
        self::CSUBJ => 'CSUBJ',
        self::CSUBJPASS => 'CSUBJPASS',
        self::DEP => 'DEP',
        self::DET => 'DET',
        self::DISCOURSE => 'DISCOURSE',
        self::DOBJ => 'DOBJ',
        self::EXPL => 'EXPL',
        self::GOESWITH => 'GOESWITH',
        self::IOBJ => 'IOBJ',
        self::MARK => 'MARK',
        self::MWE => 'MWE',
        self::MWV => 'MWV',
        self::NEG => 'NEG',
        self::NN => 'NN',
        self::NPADVMOD => 'NPADVMOD',
        self::NSUBJ => 'NSUBJ',
        self::NSUBJPASS => 'NSUBJPASS',
        self::NUM => 'NUM',
        self::NUMBER => 'NUMBER',
        self::P => 'P',
        self::PARATAXIS => 'PARATAXIS',
        self::PARTMOD => 'PARTMOD',
        self::PCOMP => 'PCOMP',
        self::POBJ => 'POBJ',
        self::POSS => 'POSS',
        self::POSTNEG => 'POSTNEG',
        self::PRECOMP => 'PRECOMP',
        self::PRECONJ => 'PRECONJ',
        self::PREDET => 'PREDET',
        self::PREF => 'PREF',
        self::PREP => 'PREP',
        self::PRONL => 'PRONL',
        self::PRT => 'PRT',
        self::PS => 'PS',
        self::QUANTMOD => 'QUANTMOD',
        self::RCMOD => 'RCMOD',
        self::RCMODREL => 'RCMODREL',
        self::RDROP => 'RDROP',
        self::REF => 'REF',
        self::REMNANT => 'REMNANT',
        self::REPARANDUM => 'REPARANDUM',
        self::ROOT => 'ROOT',
        self::SNUM => 'SNUM',
        self::SUFF => 'SUFF',
        self::TMOD => 'TMOD',
        self::TOPIC => 'TOPIC',
        self::VMOD => 'VMOD',
        self::VOCATIVE => 'VOCATIVE',
        self::XCOMP => 'XCOMP',
        self::SUFFIX => 'SUFFIX',
        self::TITLE => 'TITLE',
        self::ADVPHMOD => 'ADVPHMOD',
        self::AUXCAUS => 'AUXCAUS',
        self::AUXVV => 'AUXVV',
        self::DTMOD => 'DTMOD',
        self::FOREIGN => 'FOREIGN',
        self::KW => 'KW',
        self::PBLIST => 'LIST',
        self::NOMC => 'NOMC',
        self::NOMCSUBJ => 'NOMCSUBJ',
        self::NOMCSUBJPASS => 'NOMCSUBJPASS',
        self::NUMC => 'NUMC',
        self::COP => 'COP',
        self::DISLOCATED => 'DISLOCATED',
        self::ASP => 'ASP',
        self::GMOD => 'GMOD',
        self::GOBJ => 'GOBJ',
        self::INFMOD => 'INFMOD',
        self::MES => 'MES',
        self::NCOMP => 'NCOMP',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}


