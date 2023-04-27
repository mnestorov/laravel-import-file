<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecordMappingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('record_mappings')->insert([
            [
                'start_range' => 1,
                'end_range' => 7,
                'length' => 7,
                'description' => 'Sequence Number Area',
                'record_type_id' => 1
            ],
            [
                'start_range' => 8,
                'end_range' => 13,
                'length' => 6,
                'description' => 'Entry Run Number',
                'record_type_id' => 1
            ],
            [
                'start_range' => 14,
                'end_range' => 17,
                'length' => 4,
                'description' => 'Sequence Number (w/i the entry run)',
                'record_type_id' => 1
            ],
            [
                'start_range' => 18,
                'end_range' => 19,
                'length' => 2,
                'description' => 'Record Identifier (DT)',
                'record_type_id' => 1
            ],
            [
                'start_range' => 20,
                'end_range' => 35,
                'length' => 16,
                'description' => 'Merchant Account Number',
                'record_type_id' => 1
            ],
            [
                'start_range' => 36,
                'end_range' => 39,
                'length' => 4,
                'description' => 'Transaction Code',
                'record_type_id' => 1
            ],
            [
                'start_range' => 40,
                'end_range' => 45,
                'length' => 6,
                'description' => 'Association Number',
                'record_type_id' => 1
            ],
            [
                'start_range' => 46,
                'end_range' => 68,
                'length' => 23,
                'description' => 'Reference Number',
                'record_type_id' => 1
            ],
            [
                'start_range' => 69,
                'end_range' => 76,
                'length' => 8,
                'description' => 'Transaction Date (MMDDCCYY)',
                'record_type_id' => 1
            ],
            [
                'start_range' => 77,
                'end_range' => 87,
                'length' => 11,
                'description' => 'Transaction Amount',
                'record_type_id' => 1
            ],
            [
                'start_range' => 88,
                'end_range' => 92,
                'length' => 5,
                'description' => 'Batch Julian Date (DDDYY)',
                'record_type_id' => 1
            ],
            [
                'start_range' => 93,
                'end_range' => 107,
                'length' => 15,
                'description' => 'Net Deposit',
                'record_type_id' => 1
            ],
            [
                'start_range' => 108,
                'end_range' => 126,
                'length' => 19,
                'description' => 'Cardholder Account Number',
                'record_type_id' => 1
            ],
            [
                'start_range' => 127,
                'end_range' => 128,
                'length' => 2,
                'description' => 'Best Interchange Eligible',
                'record_type_id' => 1
            ],
            [
                'start_range' => 129,
                'end_range' => 130,
                'length' => 2,
                'description' => 'Transaction Data Condition Code',
                'record_type_id' => 1
            ],
            [
                'start_range' => 131,
                'end_range' => 134,
                'length' => 4,
                'description' => 'Downgrade Reason 1',
                'record_type_id' => 1
            ],
            [
                'start_range' => 135,
                'end_range' => 138,
                'length' => 4,
                'description' => 'Downgrade Reason 2',
                'record_type_id' => 1
            ],
            [
                'start_range' => 139,
                'end_range' => 148,
                'length' => 10,
                'description' => 'Downgrade Reason 3',
                'record_type_id' => 1
            ],
            [
                'start_range' => 149,
                'end_range' => 149,
                'length' => 1,
                'description' => 'Online Entry',
                'record_type_id' => 1
            ],
            [
                'start_range' => 150,
                'end_range' => 150,
                'length' => 1,
                'description' => 'ACH Flag',
                'record_type_id' => 1
            ],
            [
                'start_range' => 151,
                'end_range' => 151,
                'length' => 1,
                'description' => 'AUTH Source',
                'record_type_id' => 1
            ],
            [
                'start_range' => 152,
                'end_range' => 152,
                'length' => 1,
                'description' => 'Cardholder I/D Method',
                'record_type_id' => 1
            ],
            [
                'start_range' => 153,
                'end_range' => 153,
                'length' => 1,
                'description' => 'CAT Indicator',
                'record_type_id' => 1
            ],
            [
                'start_range' => 154,
                'end_range' => 154,
                'length' => 1,
                'description' => 'Reimbursement Attribute',
                'record_type_id' => 1
            ],
            [
                'start_range' => 155,
                'end_range' => 155,
                'length' => 1,
                'description' => 'Mail Order/Telephone Order Indicator',
                'record_type_id' => 1
            ],
            [
                'start_range' => 156,
                'end_range' => 156,
                'length' => 1,
                'description' => 'ACI (AUTH CHAR IND)',
                'record_type_id' => 1
            ],
            [
                'start_range' => 172,
                'end_range' => 172,
                'length' => 1,
                'description' => 'Draft A Flag Possible value: Y / N',
                'record_type_id' => 1
            ],
            [
                'start_range' => 173,
                'end_range' => 175,
                'length' => 3,
                'description' => 'AUTH Currency Code',
                'record_type_id' => 1
            ],
            [
                'start_range' => 176,
                'end_range' => 187,
                'length' => 12,
                'description' => 'AUTH Amount',
                'record_type_id' => 1
            ],
            [
                'start_range' => 188,
                'end_range' => 191,
                'length' => 4,
                'description' => 'Validation Code',
                'record_type_id' => 1
            ],
            [
                'start_range' => 192,
                'end_range' => 193,
                'length' => 2,
                'description' => 'AUTH Response Code',
                'record_type_id' => 1
            ],
            [
                'start_range' => 194,
                'end_range' => 196,
                'length' => 3,
                'description' => 'Network Identifier - Debit',
                'record_type_id' => 1
            ],
            [
                'start_range' => 197,
                'end_range' => 197,
                'length' => 1,
                'description' => 'Switch Settled Indicator',
                'record_type_id' => 1
            ],
            [
                'start_range' => 198,
                'end_range' => 199,
                'length' => 2,
                'description' => 'POS Entry Mode',
                'record_type_id' => 1
            ],
            [
                'start_range' => 200,
                'end_range' => 200,
                'length' => 1,
                'description' => 'Debit/Credit Indicator',
                'record_type_id' => 1
            ],
            [
                'start_range' => 201,
                'end_range' => 201,
                'length' => 1,
                'description' => 'Reversal Flag',
                'record_type_id' => 1
            ],
            [
                'start_range' => 202,
                'end_range' => 226,
                'length' => 25,
                'description' => 'Merchant Name',
                'record_type_id' => 1
            ],
            [
                'start_range' => 227,
                'end_range' => 232,
                'length' => 6,
                'description' => 'Authorization Number',
                'record_type_id' => 1
            ],
            [
                'start_range' => 233,
                'end_range' => 236,
                'length' => 4,
                'description' => 'Reject Reason',
                'record_type_id' => 1
            ],
            [
                'start_range' => 237,
                'end_range' => 238,
                'length' => 2,
                'description' => 'Card Type',
                'record_type_id' => 1
            ],
            [
                'start_range' => 239,
                'end_range' => 241,
                'length' => 3,
                'description' => 'Currency Code',
                'record_type_id' => 1
            ],
            [
                'start_range' => 242,
                'end_range' => 252,
                'length' => 11,
                'description' => 'Original Transaction Amount',
                'record_type_id' => 1
            ],
            [
                'start_range' => 253,
                'end_range' => 253,
                'length' => 1,
                'description' => 'Foreign Card Indicator',
                'record_type_id' => 1
            ],
            [
                'start_range' => 254,
                'end_range' => 254,
                'length' => 1,
                'description' => 'Carryover Indicator',
                'record_type_id' => 1
            ],
            [
                'start_range' => 255,
                'end_range' => 256,
                'length' => 2,
                'description' => 'Extension Record Indicator',
                'record_type_id' => 1
            ],
            [
                'start_range' => 257,
                'end_range' => 260,
                'length' => 4,
                'description' => 'MCC Code',
                'record_type_id' => 1
            ],
            [
                'start_range' => 261,
                'end_range' => 268,
                'length' => 8,
                'description' => 'Terminal ID',
                'record_type_id' => 1
            ],
            [
                'start_range' => 269,
                'end_range' => 271,
                'length' => 3,
                'description' => 'Discover POS Entry Mode',
                'record_type_id' => 1
            ],
            [
                'start_range' => 272,
                'end_range' => 296,
                'length' => 25,
                'description' => 'Purchase ID',
                'record_type_id' => 1
            ],
            [
                'start_range' => 297,
                'end_range' => 305,
                'length' => 9,
                'description' => 'Cash Back Amount (MC)',
                'record_type_id' => 1
            ],
            [
                'start_range' => 306,
                'end_range' => 306,
                'length' => 1,
                'description' => 'Cash Back Amount Sign +/- (MC)',
                'record_type_id' => 1
            ],
            [
                'start_range' => 307,
                'end_range' => 319,
                'length' => 13,
                'description' => 'POS Data Code',
                'record_type_id' => 1
            ],
            [
                'start_range' => 320,
                'end_range' => 322,
                'length' => 3,
                'description' => 'Program Registration ID',
                'record_type_id' => 1
            ],
            [
                'start_range' => 323,
                'end_range' => 325,
                'length' => 3,
                'description' => 'Card type',
                'record_type_id' => 1
            ],
            [
                'start_range' => 326,
                'end_range' => 327,
                'length' => 2,
                'description' => 'Product ID',
                'record_type_id' => 1
            ],
            [
                'start_range' => 328,
                'end_range' => 332,
                'length' => 5,
                'description' => 'Submitted Interchange',
                'record_type_id' => 1
            ],
            [
                'start_range' => 333,
                'end_range' => 338,
                'length' => 6,
                'description' => 'System Trace Audit Number',
                'record_type_id' => 1
            ],
            [
                'start_range' => 339,
                'end_range' => 340,
                'length' => 2,
                'description' => 'Discover Transaction Type SA - RT - CA - RS - RC - RR - Card Sale Credit Cash Advance Card Sale Rev Cash Advance Rev Credit Rev',
                'record_type_id' => 1
            ],
            [
                'start_range' => 341,
                'end_range' => 346,
                'length' => 6,
                'description' => 'Local Transaction Time',
                'record_type_id' => 1
            ],
            [
                'start_range' => 347,
                'end_range' => 352,
                'length' => 6,
                'description' => 'Discover Processing Code',
                'record_type_id' => 1
            ],
            [
                'start_range' => 353,
                'end_range' => 353,
                'length' => 1,
                'description' => 'Commercial Card Service Indicator (CCS) Possible values: A- GSA IGOTS B- GSA Large-Ticket C- Both GSA Large-Ticket and GSA IGOTS D- Fleet E- Fleet and GSA IGOTS F- Fleet and GSA Large-Ticket G- Fleet, GSA IGOTS, and GSA Large-Ticket H- Large Ticket I- Fleet and Large-Ticket J- Visa Distribution',
                'record_type_id' => 1
            ],
            [
                'start_range' => 354,
                'end_range' => 362,
                'length' => 9,
                'description' => 'Mastercard Cross Border Visa ISA ASSM Fee Amount AMEX Inbound Fee',
                'record_type_id' => 1
            ],
            [
                'start_range' => 363,
                'end_range' => 363,
                'length' => 1,
                'description' => 'Space - 1 - 2 - 5 - no fee applied Mastercard Cross Border Domestic Currency Mastercard Cross Border Foreign Currency AMEX Inbound Fee',
                'record_type_id' => 1
            ],
            [
                'start_range' => 364,
                'end_range' => 364,
                'length' => 1,
                'description' => 'DCC Indicator Possible values: 1 - DCC performed Space - DCC not performed or not applicable',
                'record_type_id' => 1
            ],
            [
                'start_range' => 365,
                'end_range' => 365,
                'length' => 1,
                'description' => 'Regulated Indicator Possible values: Visa Y- Blank or N - Mastercard B- 1- Blank or N - Discover 1- 2- Blank or Zero - Visa Regulated Debit Fee Transaction with Fraud Prevention Adjustment Visa Non-Regulated Transaction Mastercard Regulated Debit Fee Transaction Mastercard Regulated Debit Fee Transaction & eligible for Fraud Prevention Adjustment Mastercard Non-Regulated Transaction Discover Non-Exempt Transaction with Fraud Prevention Adjustment Discover Non-Exempt Transaction Discover Exempt Transaction (Non-Regulated)',
                'record_type_id' => 1
            ],
            [
                'start_range' => 366,
                'end_range' => 374,
                'length' => 9,
                'description' => 'Visa Integrity Fee',
                'record_type_id' => 1
            ],
            [
                'start_range' => 375,
                'end_range' => 376,
                'length' => 2,
                'description' => 'IASF Fee Type Possible values: 01 - 02 - 03 - 04 - 05 - 06 - 07 - 08 - 09 - 10 - 11 - 12 - Space - Canada Multi-currency purchase Canada Single currency purchase Canada Multi-currency cash Canada Single -currency cash US Single currency purchase US Single currency cash US Multi-currency purchase US Multi-currency cash AP Single currency cash AP Single currency purchase AP Multi-currency cash AP Muti-currency purchase No fee',
                'record_type_id' => 1
            ],
            [
                'start_range' => 377,
                'end_range' => 387,
                'length' => 11,
                'description' => 'IASF Fee Amount',
                'record_type_id' => 1
            ],
            [
                'start_range' => 388,
                'end_range' => 388,
                'length' => 1,
                'description' => 'Debit or Credit Indicator',
                'record_type_id' => 1
            ],
            [
                'start_range' => 389,
                'end_range' => 403,
                'length' => 15,
                'description' => 'Adjustment Amount',
                'record_type_id' => 1
            ],
            [
                'start_range' => 404,
                'end_range' => 404,
                'length' => 1,
                'description' => 'Debit/Credit Indicator',
                'record_type_id' => 1
            ],
            [
                'start_range' => 405,
                'end_range' => 419,
                'length' => 15,
                'description' => 'Cashback Fee Amount (MC)',
                'record_type_id' => 1
            ],
            [
                'start_range' => 420,
                'end_range' => 420,
                'length' => 1,
                'description' => 'Cashback Fee Sign +/- (MC)',
                'record_type_id' => 1
            ],
            [
                'start_range' => 421,
                'end_range' => 430,
                'length' => 10,
                'description' => 'Industry SE',
                'record_type_id' => 1
            ],
            [
                'start_range' => 431,
                'end_range' => 450,
                'length' => 20,
                'description' => 'Seller ID',
                'record_type_id' => 1
            ],
            [
                'start_range' => 451,
                'end_range' => 475,
                'length' => 25,
                'description' => 'Seller DBA',
                'record_type_id' => 1
            ],
            [
                'start_range' => 476,
                'end_range' => 500,
                'length' => 25,
                'description' => 'Seller Address',
                'record_type_id' => 1
            ],
            [
                'start_range' => 501,
                'end_range' => 516,
                'length' => 16,
                'description' => 'Seller Phone',
                'record_type_id' => 1
            ],
            [
                'start_range' => 517,
                'end_range' => 526,
                'length' => 10,
                'description' => 'Seller Postal Code',
                'record_type_id' => 1
            ],
            [
                'start_range' => 527,
                'end_range' => 566,
                'length' => 40,
                'description' => 'Seller Email',
                'record_type_id' => 1
            ],
            [
                'start_range' => 567,
                'end_range' => 574,
                'length' => 8,
                'description' => 'MC Lane ID',
                'record_type_id' => 1
            ],
            [
                'start_range' => 575,
                'end_range' => 576,
                'length' => 2,
                'description' => 'Mastercard Transaction Integrity Class This value is assigned by Mastercard and shows the safety and security of the transaction and includes the final assessment of the validity of the card and the cardholder. Card and Cardholder Present: A1 - EMV/Token in a Secure, Trusted Environment B1 - EMV/Chip Equivalent C1 - Mag Stripe E1 - Key Entered U0 - Unclassified Card and/or Cardholder Not Present: A2 - Digital Transactions B2 - Authenticated Checkout C2 - Transaction Validation D2 - Enhanced Data E2 - Generic Messaging U0 - Unclassified',
                'record_type_id' => 1
            ],
            [
                'start_range' => 1,
                'end_range' => 7,
                'length' => 7,
                'description' => 'Sequence Number Area',
                'record_type_id' => 2
            ],
            [
                'start_range' => 8,
                'end_range' => 13,
                'length' => 6,
                'description' => 'Entry Run Number',
                'record_type_id' => 2
            ],
            [
                'start_range' => 14,
                'end_range' => 17,
                'length' => 4,
                'description' => 'Sequence Number (w/i the entry run)',
                'record_type_id' => 2
            ],
            [
                'start_range' => 18,
                'end_range' => 19,
                'length' => 2,
                'description' => 'Record Identifier (P1)',
                'record_type_id' => 2
            ],
            [
                'start_range' => 20,
                'end_range' => 35,
                'length' => 16,
                'description' => 'Merchant Account Number',
                'record_type_id' => 2
            ],
            [
                'start_range' => 36,
                'end_range' => 39,
                'length' => 4,
                'description' => 'Transaction Code',
                'record_type_id' => 2
            ],
            [
                'start_range' => 40,
                'end_range' => 51,
                'length' => 12,
                'description' => 'VAT Tax Amount (Freight)',
                'record_type_id' => 2
            ],
            [
                'start_range' => 52,
                'end_range' => 55,
                'length' => 4,
                'description' => 'VAT Tax Rate (Freight)',
                'record_type_id' => 2
            ],
            [
                'start_range' => 85,
                'end_range' => 85,
                'length' => 1,
                'description' => 'Local Tax (VS, MC, AM)',
                'record_type_id' => 2
            ],
            [
                'start_range' => 86,
                'end_range' => 97,
                'length' => 12,
                'description' => 'Local Tax Amount',
                'record_type_id' => 2
            ],
            [
                'start_range' => 98,
                'end_range' => 109,
                'length' => 12,
                'description' => 'Freight Amount (VS, MC, AM)',
                'record_type_id' => 2
            ],
            [
                'start_range' => 110,
                'end_range' => 119,
                'length' => 10,
                'description' => 'Destination Zip (VS)',
                'record_type_id' => 2
            ],
            [
                'start_range' => 120,
                'end_range' => 123,
                'length' => 4,
                'description' => 'Merchant Type',
                'record_type_id' => 2
            ],
            [
                'start_range' => 124,
                'end_range' => 135,
                'length' => 12,
                'description' => 'Duty Amount (VS, MC, AM)',
                'record_type_id' => 2
            ],
            [
                'start_range' => 136,
                'end_range' => 145,
                'length' => 10,
                'description' => 'Merchant Tax ID',
                'record_type_id' => 2
            ],
            [
                'start_range' => 146,
                'end_range' => 155,
                'length' => 10,
                'description' => 'Ship from Zip Code (VS, MC)',
                'record_type_id' => 2
            ],
            [
                'start_range' => 156,
                'end_range' => 156,
                'length' => 1,
                'description' => 'National Tax Included (VS, MC)',
                'record_type_id' => 2
            ],
            [
                'start_range' => 157,
                'end_range' => 168,
                'length' => 12,
                'description' => 'National/ALT Tax Amount (VS, MC)',
                'record_type_id' => 2
            ],
            [
                'start_range' => 169,
                'end_range' => 180,
                'length' => 12,
                'description' => 'Other Tax',
                'record_type_id' => 2
            ],
            [
                'start_range' => 181,
                'end_range' => 183,
                'length' => 3,
                'description' => 'Destination Country Code (VS, MC)',
                'record_type_id' => 2
            ],
            [
                'start_range' => 184,
                'end_range' => 200,
                'length' => 17,
                'description' => 'Merchant Reference Number',
                'record_type_id' => 2
            ],
            [
                'start_range' => 201,
                'end_range' => 212,
                'length' => 12,
                'description' => 'Discount Amount',
                'record_type_id' => 2
            ],
            [
                'start_range' => 213,
                'end_range' => 232,
                'length' => 20,
                'description' => 'Merchant VAT Registration',
                'record_type_id' => 2
            ],
            [
                'start_range' => 233,
                'end_range' => 245,
                'length' => 13,
                'description' => 'Customer VAT Registration',
                'record_type_id' => 2
            ],
            [
                'start_range' => 246,
                'end_range' => 249,
                'length' => 4,
                'description' => 'Summary Commodity Code',
                'record_type_id' => 2
            ],
            [
                'start_range' => 250,
                'end_range' => 264,
                'length' => 15,
                'description' => 'VAT Invoice Reference Number',
                'record_type_id' => 2
            ],
            [
                'start_range' => 265,
                'end_range' => 270,
                'length' => 6,
                'description' => 'Order Date',
                'record_type_id' => 2
            ],
            [
                'start_range' => 271,
                'end_range' => 271,
                'length' => 1,
                'description' => 'Detail Record to follow (D)',
                'record_type_id' => 2
            ],
            [
                'start_range' => 1,
                'end_range' => 7,
                'length' => 7,
                'description' => 'Sequence Number Area',
                'record_type_id' => 3
            ],
            [
                'start_range' => 8,
                'end_range' => 13,
                'length' => 6,
                'description' => 'Entry Run Number',
                'record_type_id' => 3
            ],
            [
                'start_range' => 14,
                'end_range' => 17,
                'length' => 4,
                'description' => 'Sequence Number (w/i the entry run)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 18,
                'end_range' => 19,
                'length' => 2,
                'description' => 'Record Identifier (A2)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 20,
                'end_range' => 35,
                'length' => 16,
                'description' => 'Merchant Account Number',
                'record_type_id' => 3
            ],
            [
                'start_range' => 36,
                'end_range' => 39,
                'length' => 4,
                'description' => 'Transaction Code',
                'record_type_id' => 3
            ],
            [
                'start_range' => 40,
                'end_range' => 53,
                'length' => 14,
                'description' => 'Conjunction Ticket Number (MC/VS)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 54,
                'end_range' => 54,
                'length' => 1,
                'description' => 'Coupon Number (VS, MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 55,
                'end_range' => 56,
                'length' => 2,
                'description' => 'Carrier Code (VS, MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 57,
                'end_range' => 61,
                'length' => 5,
                'description' => 'Flight Number (VS, MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 62,
                'end_range' => 63,
                'length' => 2,
                'description' => 'Service Class (VS, MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 64,
                'end_range' => 68,
                'length' => 5,
                'description' => 'ORIG City/Airport Code (VS)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 69,
                'end_range' => 69,
                'length' => 1,
                'description' => 'Stop Over Code (VS, MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 70,
                'end_range' => 74,
                'length' => 5,
                'description' => 'DEST City/Airport Code (VS, MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 75,
                'end_range' => 89,
                'length' => 15,
                'description' => 'Fare Basis Code (VS, MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 90,
                'end_range' => 95,
                'length' => 6,
                'description' => 'Departure/Travel Date (VS, MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 96,
                'end_range' => 99,
                'length' => 4,
                'description' => 'Departure Time (VS, MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 100,
                'end_range' => 103,
                'length' => 4,
                'description' => 'Arrival Time (VS, MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 104,
                'end_range' => 104,
                'length' => 1,
                'description' => 'Departure Time Segment (MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 105,
                'end_range' => 105,
                'length' => 1,
                'description' => 'Arrival Time Segment (MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 106,
                'end_range' => 120,
                'length' => 15,
                'description' => 'Exchange Ticket (MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 121,
                'end_range' => 132,
                'length' => 12,
                'description' => 'Fare Amount (MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 133,
                'end_range' => 141,
                'length' => 9,
                'description' => 'Fee Amount (MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 142,
                'end_range' => 150,
                'length' => 9,
                'description' => 'Taxes Amount (MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 151,
                'end_range' => 170,
                'length' => 20,
                'description' => 'Endorsements/Restrictions (MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 171,
                'end_range' => 172,
                'length' => 2,
                'description' => 'Extension Indicator (VS, MC)',
                'record_type_id' => 3
            ],
            [
                'start_range' => 1,
                'end_range' => 7,
                'length' => 7,
                'description' => 'Sequence Number Area',
                'record_type_id' => 4
            ],
            [
                'start_range' => 8,
                'end_range' => 13,
                'length' => 6,
                'description' => 'Entry Run Number',
                'record_type_id' => 4
            ],
            [
                'start_range' => 14,
                'end_range' => 17,
                'length' => 4,
                'description' => 'Sequence Number (w/i the entry run)',
                'record_type_id' => 4
            ],
            [
                'start_range' => 18,
                'end_range' => 19,
                'length' => 2,
                'description' => 'Record Identifier (A1)',
                'record_type_id' => 4
            ],
            [
                'start_range' => 20,
                'end_range' => 35,
                'length' => 16,
                'description' => 'Merchant Account Number',
                'record_type_id' => 4
            ],
            [
                'start_range' => 36,
                'end_range' => 39,
                'length' => 4,
                'description' => 'Transaction Code',
                'record_type_id' => 4
            ],
            [
                'start_range' => 40,
                'end_range' => 41,
                'length' => 2,
                'description' => 'Multiple Clearing Sequence Number',
                'record_type_id' => 4
            ],
            [
                'start_range' => 42,
                'end_range' => 43,
                'length' => 2,
                'description' => 'Multiple Clearing Sequence Count',
                'record_type_id' => 4
            ],
            [
                'start_range' => 44,
                'end_range' => 63,
                'length' => 20,
                'description' => 'Passenger Name',
                'record_type_id' => 4
            ],
            [
                'start_range' => 64,
                'end_range' => 73,
                'length' => 10,
                'description' => 'Filler',
                'record_type_id' => 4
            ],
            [
                'start_range' => 74,
                'end_range' => 90,
                'length' => 17,
                'description' => 'Customer Code',
                'record_type_id' => 4
            ],
            [
                'start_range' => 91,
                'end_range' => 102,
                'length' => 12,
                'description' => 'Total Fare Amount',
                'record_type_id' => 4
            ],
            [
                'start_range' => 103,
                'end_range' => 114,
                'length' => 12,
                'description' => 'Total Tax Amount',
                'record_type_id' => 4
            ],
            [
                'start_range' => 115,
                'end_range' => 126,
                'length' => 12,
                'description' => 'National Tax Amount',
                'record_type_id' => 4
            ],
            [
                'start_range' => 127,
                'end_range' => 138,
                'length' => 12,
                'description' => 'Total Fee Amount',
                'record_type_id' => 4
            ],
            [
                'start_range' => 139,
                'end_range' => 141,
                'length' => 3,
                'description' => 'Currency Code Amount',
                'record_type_id' => 4
            ],
            [
                'start_range' => 142,
                'end_range' => 154,
                'length' => 13,
                'description' => 'Exchange Ticket Number',
                'record_type_id' => 4
            ],
            [
                'start_range' => 155,
                'end_range' => 166,
                'length' => 12,
                'description' => 'Exchange Ticket Amount',
                'record_type_id' => 4
            ],
            [
                'start_range' => 167,
                'end_range' => 174,
                'length' => 8,
                'description' => 'Travel Agency Code',
                'record_type_id' => 4
            ],
            [
                'start_range' => 175,
                'end_range' => 199,
                'length' => 25,
                'description' => 'Travel Agency Name',
                'record_type_id' => 4
            ],
            [
                'start_range' => 200,
                'end_range' => 214,
                'length' => 15,
                'description' => 'Ticket Number',
                'record_type_id' => 4
            ],
            [
                'start_range' => 215,
                'end_range' => 215,
                'length' => 1,
                'description' => 'Internet Indicator',
                'record_type_id' => 4
            ],
            [
                'start_range' => 216,
                'end_range' => 221,
                'length' => 6,
                'description' => 'Issue Date',
                'record_type_id' => 4
            ],
            [
                'start_range' => 222,
                'end_range' => 225,
                'length' => 4,
                'description' => 'Issuing Carrier',
                'record_type_id' => 4
            ],
            [
                'start_range' => 226,
                'end_range' => 226,
                'length' => 1,
                'description' => 'Restricted Ticket Indicator',
                'record_type_id' => 4
            ],
            [
                'start_range' => 227,
                'end_range' => 230,
                'length' => 4,
                'description' => 'Computerized Reservation System',
                'record_type_id' => 4
            ],
            [
                'start_range' => 231,
                'end_range' => 232,
                'length' => 2,
                'description' => 'Extension Indicator Possible value: VS MC',
                'record_type_id' => 4
            ],
            [
                'start_range' => 1,
                'end_range' => 7,
                'length' => 7,
                'description' => 'Sequence Number Area',
                'record_type_id' => 5
            ],
            [
                'start_range' => 8,
                'end_range' => 13,
                'length' => 6,
                'description' => 'Entry Run Number',
                'record_type_id' => 5
            ],
            [
                'start_range' => 14,
                'end_range' => 17,
                'length' => 4,
                'description' => 'Sequence Number (w/i the entry run)',
                'record_type_id' => 5
            ],
            [
                'start_range' => 18,
                'end_range' => 19,
                'length' => 2,
                'description' => 'Record Identifier (P2)',
                'record_type_id' => 5
            ],
            [
                'start_range' => 20,
                'end_range' => 35,
                'length' => 16,
                'description' => 'Merchant Account Number',
                'record_type_id' => 5
            ],
            [
                'start_range' => 36,
                'end_range' => 39,
                'length' => 4,
                'description' => 'Transaction Code',
                'record_type_id' => 5
            ],
            [
                'start_range' => 59,
                'end_range' => 59,
                'length' => 1,
                'description' => 'Discount Amount Indicator Possible value: Y N',
                'record_type_id' => 5
            ],
            [
                'start_range' => 60,
                'end_range' => 68,
                'length' => 9,
                'description' => 'Discount Amount',
                'record_type_id' => 5
            ],
            [
                'start_range' => 69,
                'end_range' => 83,
                'length' => 15,
                'description' => 'Alternate Tax Identifier',
                'record_type_id' => 5
            ],
            [
                'start_range' => 84,
                'end_range' => 95,
                'length' => 12,
                'description' => 'Product Code (VS, MC)',
                'record_type_id' => 5
            ],
            [
                'start_range' => 99,
                'end_range' => 133,
                'length' => 35,
                'description' => 'Item Description',
                'record_type_id' => 5
            ],
            [
                'start_range' => 134,
                'end_range' => 145,
                'length' => 12,
                'description' => 'Item Quantity (VS, MC, AM)',
                'record_type_id' => 5
            ],
            [
                'start_range' => 146,
                'end_range' => 157,
                'length' => 12,
                'description' => 'Item Unit of Measure (VS, MC)',
                'record_type_id' => 5
            ],
            [
                'start_range' => 158,
                'end_range' => 169,
                'length' => 12,
                'description' => 'Unit Cost (VS, MC, AM)',
                'record_type_id' => 5
            ],
            [
                'start_range' => 170,
                'end_range' => 170,
                'length' => 1,
                'description' => 'Net/Gross Indicator for Extended Amount',
                'record_type_id' => 5
            ],
            [
                'start_range' => 171,
                'end_range' => 175,
                'length' => 5,
                'description' => 'VAT Rate applied',
                'record_type_id' => 5
            ],
            [
                'start_range' => 176,
                'end_range' => 179,
                'length' => 4,
                'description' => 'VAT Type Applied/VAT Rating',
                'record_type_id' => 5
            ],
            [
                'start_range' => 180,
                'end_range' => 191,
                'length' => 12,
                'description' => 'VAT Amount (MC, VS)',
                'record_type_id' => 5
            ],
            [
                'start_range' => 192,
                'end_range' => 192,
                'length' => 1,
                'description' => 'Debit/Credit Indicator',
                'record_type_id' => 5
            ],
            [
                'start_range' => 193,
                'end_range' => 194,
                'length' => 2,
                'description' => 'Type of Supply',
                'record_type_id' => 5
            ],
            [
                'start_range' => 195,
                'end_range' => 195,
                'length' => 1,
                'description' => 'Extension Record Indicator (D)',
                'record_type_id' => 5
            ],
            [
                'start_range' => 196,
                'end_range' => 207,
                'length' => 12,
                'description' => 'Item Commodity Code',
                'record_type_id' => 5
            ],
            [
                'start_range' => 208,
                'end_range' => 219,
                'length' => 12,
                'description' => 'Line Item Total',
                'record_type_id' => 5
            ],
            [
                'start_range' => 1,
                'end_range' => 7,
                'length' => 7,
                'description' => 'Sequence Number Area',
                'record_type_id' => 6
            ],
            [
                'start_range' => 8,
                'end_range' => 13,
                'length' => 6,
                'description' => 'Entry Run Number',
                'record_type_id' => 6
            ],
            [
                'start_range' => 14,
                'end_range' => 17,
                'length' => 4,
                'description' => 'Sequence Number (w/i the entry run)',
                'record_type_id' => 6
            ],
            [
                'start_range' => 18,
                'end_range' => 19,
                'length' => 2,
                'description' => 'Record Identifier (DR)',
                'record_type_id' => 6
            ],
            [
                'start_range' => 20,
                'end_range' => 35,
                'length' => 16,
                'description' => 'Merchant Account Number',
                'record_type_id' => 6
            ],
            [
                'start_range' => 36,
                'end_range' => 39,
                'length' => 4,
                'description' => 'Transaction Code',
                'record_type_id' => 6
            ],
            [
                'start_range' => 40,
                'end_range' => 64,
                'length' => 25,
                'description' => 'Purchase ID/Direct Marketing ORD Number',
                'record_type_id' => 6
            ],
            [
                'start_range' => 65,
                'end_range' => 65,
                'length' => 1,
                'description' => 'Address Verification Service Response',
                'record_type_id' => 6
            ],
            [
                'start_range' => 66,
                'end_range' => 77,
                'length' => 12,
                'description' => 'Total Authorized Amount',
                'record_type_id' => 6
            ],
            [
                'start_range' => 78,
                'end_range' => 90,
                'length' => 13,
                'description' => 'Merchant Customer Service Phone Number',
                'record_type_id' => 6
            ],
            [
                'start_range' => 91,
                'end_range' => 92,
                'length' => 2,
                'description' => 'Mail/Phone Installment Sequence Number',
                'record_type_id' => 6
            ],
            [
                'start_range' => 93,
                'end_range' => 94,
                'length' => 2,
                'description' => 'Mail/Phone Installment Count',
                'record_type_id' => 6
            ],
            [
                'start_range' => 95,
                'end_range' => 96,
                'length' => 2,
                'description' => 'Extension Record Indicator (P1)',
                'record_type_id' => 6
            ],
            [
                'start_range' => 1,
                'end_range' => 7,
                'length' => 7,
                'description' => 'Sequence Number Area',
                'record_type_id' => 7
            ],
            [
                'start_range' => 8,
                'end_range' => 13,
                'length' => 6,
                'description' => 'Entry Run Number',
                'record_type_id' => 7
            ],
            [
                'start_range' => 14,
                'end_range' => 17,
                'length' => 4,
                'description' => 'Sequence Number (w/i the entry run)',
                'record_type_id' => 7
            ],
            [
                'start_range' => 18,
                'end_range' => 19,
                'length' => 2,
                'description' => 'Record Identifier (CT)',
                'record_type_id' => 7
            ],
            [
                'start_range' => 20,
                'end_range' => 35,
                'length' => 16,
                'description' => 'Merchant Account Number',
                'record_type_id' => 7
            ],
            [
                'start_range' => 36,
                'end_range' => 39,
                'length' => 4,
                'description' => 'Transaction Code',
                'record_type_id' => 7
            ],
            [
                'start_range' => 40,
                'end_range' => 64,
                'length' => 25,
                'description' => 'Purchase Identifier',
                'record_type_id' => 7
            ],
            [
                'start_range' => 65,
                'end_range' => 65,
                'length' => 1,
                'description' => 'No Show Indicator',
                'record_type_id' => 7
            ],
            [
                'start_range' => 66,
                'end_range' => 71,
                'length' => 6,
                'description' => 'Extra Charge',
                'record_type_id' => 7
            ],
            [
                'start_range' => 72,
                'end_range' => 77,
                'length' => 6,
                'description' => 'Check Out Date (MMDDYY)',
                'record_type_id' => 7
            ],
            [
                'start_range' => 78,
                'end_range' => 78,
                'length' => 1,
                'description' => 'Market Specific Authorization Data Indicator',
                'record_type_id' => 7
            ],
            [
                'start_range' => 79,
                'end_range' => 90,
                'length' => 12,
                'description' => 'Total Authorized Amount',
                'record_type_id' => 7
            ],
            [
                'start_range' => 91,
                'end_range' => 130,
                'length' => 40,
                'description' => 'Renter Name',
                'record_type_id' => 7
            ],
            [
                'start_range' => 131,
                'end_range' => 140,
                'length' => 10,
                'description' => 'Return Location ID',
                'record_type_id' => 7
            ],
            [
                'start_range' => 141,
                'end_range' => 142,
                'length' => 2,
                'description' => 'Program Code',
                'record_type_id' => 7
            ],
            [
                'start_range' => 143,
                'end_range' => 148,
                'length' => 6,
                'description' => 'Rental Return Date (MMDDYY)',
                'record_type_id' => 7
            ],
            [
                'start_range' => 149,
                'end_range' => 157,
                'length' => 9,
                'description' => 'Daily Rental Rate',
                'record_type_id' => 7
            ],
            [
                'start_range' => 158,
                'end_range' => 166,
                'length' => 9,
                'description' => 'Weekly Rental Rate',
                'record_type_id' => 7
            ],
            [
                'start_range' => 167,
                'end_range' => 172,
                'length' => 6,
                'description' => 'Rate Per Mile',
                'record_type_id' => 7
            ],
            [
                'start_range' => 173,
                'end_range' => 173,
                'length' => 1,
                'description' => 'Adjustment Amount Indicator',
                'record_type_id' => 7
            ],
            [
                'start_range' => 174,
                'end_range' => 182,
                'length' => 9,
                'description' => 'Fuel Charges',
                'record_type_id' => 7
            ],
            [
                'start_range' => 183,
                'end_range' => 183,
                'length' => 1,
                'description' => 'Insurance Indicator',
                'record_type_id' => 7
            ],
            [
                'start_range' => 184,
                'end_range' => 192,
                'length' => 9,
                'description' => 'Insurance Charges',
                'record_type_id' => 7
            ],
            [
                'start_range' => 193,
                'end_range' => 194,
                'length' => 2,
                'description' => 'Car Class Code/Rental Class',
                'record_type_id' => 7
            ],
            [
                'start_range' => 195,
                'end_range' => 203,
                'length' => 9,
                'description' => 'One Way Drop-Off Charges',
                'record_type_id' => 7
            ],
            [
                'start_range' => 204,
                'end_range' => 207,
                'length' => 4,
                'description' => 'Total Miles',
                'record_type_id' => 7
            ],
            [
                'start_range' => 208,
                'end_range' => 211,
                'length' => 4,
                'description' => 'Max Free Miles',
                'record_type_id' => 7
            ],
            [
                'start_range' => 212,
                'end_range' => 213,
                'length' => 2,
                'description' => 'Extension Record Indicator Possible value: ON (VS) CT (MC)',
                'record_type_id' => 7
            ],
            [
                'start_range' => 214,
                'end_range' => 215,
                'length' => 2,
                'description' => 'Days Rented',
                'record_type_id' => 7
            ],
            [
                'start_range' => 1,
                'end_range' => 7,
                'length' => 7,
                'description' => 'Sequence Number Area',
                'record_type_id' => 8
            ],
            [
                'start_range' => 8,
                'end_range' => 13,
                'length' => 6,
                'description' => 'Entry Run Number',
                'record_type_id' => 8
            ],
            [
                'start_range' => 14,
                'end_range' => 17,
                'length' => 4,
                'description' => 'Sequence Number (w/i the entry run)',
                'record_type_id' => 8
            ],
            [
                'start_range' => 18,
                'end_range' => 19,
                'length' => 2,
                'description' => 'Record Identifier (FT)',
                'record_type_id' => 8
            ],
            [
                'start_range' => 20,
                'end_range' => 35,
                'length' => 16,
                'description' => 'Merchant Account Number',
                'record_type_id' => 8
            ],
            [
                'start_range' => 36,
                'end_range' => 39,
                'length' => 4,
                'description' => 'Transaction Code',
                'record_type_id' => 8
            ],
            [
                'start_range' => 40,
                'end_range' => 43,
                'length' => 4,
                'description' => 'Oil Company Brand Name',
                'record_type_id' => 8
            ],
            [
                'start_range' => 44,
                'end_range' => 73,
                'length' => 30,
                'description' => 'Merchant Street Address',
                'record_type_id' => 8
            ],
            [
                'start_range' => 74,
                'end_range' => 82,
                'length' => 9,
                'description' => 'Merchant Postal COD 1 and Extension',
                'record_type_id' => 8
            ],
            [
                'start_range' => 83,
                'end_range' => 86,
                'length' => 4,
                'description' => 'Purchase Time (HHMM 24-HR Clock)',
                'record_type_id' => 8
            ],
            [
                'start_range' => 87,
                'end_range' => 87,
                'length' => 1,
                'description' => 'VS Service Type/MC Fuel Service Type',
                'record_type_id' => 8
            ],
            [
                'start_range' => 88,
                'end_range' => 90,
                'length' => 3,
                'description' => 'Motor Fuel Product Code',
                'record_type_id' => 8
            ],
            [
                'start_range' => 91,
                'end_range' => 102,
                'length' => 12,
                'description' => 'Unit Cost',
                'record_type_id' => 8
            ],
            [
                'start_range' => 103,
                'end_range' => 103,
                'length' => 1,
                'description' => 'Unit of Measure',
                'record_type_id' => 8
            ],
            [
                'start_range' => 104,
                'end_range' => 115,
                'length' => 12,
                'description' => 'Quantity',
                'record_type_id' => 8
            ],
            [
                'start_range' => 116,
                'end_range' => 127,
                'length' => 12,
                'description' => 'Gross Fuel Price',
                'record_type_id' => 8
            ],
            [
                'start_range' => 128,
                'end_range' => 139,
                'length' => 12,
                'description' => 'Net Fuel Price',
                'record_type_id' => 8
            ],
            [
                'start_range' => 140,
                'end_range' => 151,
                'length' => 12,
                'description' => 'Net Non Fuel Price',
                'record_type_id' => 8
            ],
            [
                'start_range' => 152,
                'end_range' => 158,
                'length' => 7,
                'description' => 'Odometer Reading',
                'record_type_id' => 8
            ],
            [
                'start_range' => 159,
                'end_range' => 175,
                'length' => 17,
                'description' => 'Vehicle Number',
                'record_type_id' => 8
            ],
            [
                'start_range' => 176,
                'end_range' => 192,
                'length' => 17,
                'description' => 'VS Cust Ref Identifier/MC Driver',
                'record_type_id' => 8
            ],
            [
                'start_range' => 193,
                'end_range' => 195,
                'length' => 3,
                'description' => 'VS type of Purch/MC Prod Type Code',
                'record_type_id' => 8
            ],
            [
                'start_range' => 196,
                'end_range' => 200,
                'length' => 5,
                'description' => 'Coupon/Discount Amount',
                'record_type_id' => 8
            ],
            [
                'start_range' => 201,
                'end_range' => 212,
                'length' => 12,
                'description' => 'VS ST Fuel Tax/MC Tax Amt 1',
                'record_type_id' => 8
            ],
            [
                'start_range' => 213,
                'end_range' => 224,
                'length' => 12,
                'description' => 'MC Tax Amount 2',
                'record_type_id' => 8
            ],
            [
                'start_range' => 225,
                'end_range' => 236,
                'length' => 12,
                'description' => 'Local Fuel Tax - Misc. Non-Fuel',
                'record_type_id' => 8
            ],
            [
                'start_range' => 237,
                'end_range' => 240,
                'length' => 4,
                'description' => 'VAT Tax Rate',
                'record_type_id' => 8
            ],
            [
                'start_range' => 241,
                'end_range' => 242,
                'length' => 2,
                'description' => 'Product Code 1',
                'record_type_id' => 8
            ],
            [
                'start_range' => 243,
                'end_range' => 244,
                'length' => 2,
                'description' => 'Product Code 2',
                'record_type_id' => 8
            ],
            [
                'start_range' => 245,
                'end_range' => 246,
                'length' => 2,
                'description' => 'Product Code 3',
                'record_type_id' => 8
            ],
            [
                'start_range' => 247,
                'end_range' => 248,
                'length' => 2,
                'description' => 'Product Code 4',
                'record_type_id' => 8
            ],
            [
                'start_range' => 249,
                'end_range' => 250,
                'length' => 2,
                'description' => 'Product Code 5',
                'record_type_id' => 8
            ],
            [
                'start_range' => 251,
                'end_range' => 252,
                'length' => 2,
                'description' => 'Product Code 6',
                'record_type_id' => 8
            ],
            [
                'start_range' => 253,
                'end_range' => 254,
                'length' => 2,
                'description' => 'Product Code 7',
                'record_type_id' => 8
            ],
            [
                'start_range' => 255,
                'end_range' => 256,
                'length' => 2,
                'description' => 'Product Code 8',
                'record_type_id' => 8
            ],
            [
                'start_range' => 257,
                'end_range' => 268,
                'length' => 12,
                'description' => 'VS Local Sales Tax/MC Tax Amount 3',
                'record_type_id' => 8
            ],
            [
                'start_range' => 269,
                'end_range' => 269,
                'length' => 1,
                'description' => 'Local Tax Included',
                'record_type_id' => 8
            ],
            [
                'start_range' => 270,
                'end_range' => 278,
                'length' => 9,
                'description' => 'Gross Non-Fuel Price',
                'record_type_id' => 8
            ],
            [
                'start_range' => 279,
                'end_range' => 279,
                'length' => 1,
                'description' => 'Misc. Fuel Tax Exemption Status',
                'record_type_id' => 8
            ],
            [
                'start_range' => 280,
                'end_range' => 280,
                'length' => 1,
                'description' => 'Misc. Non-Fuel Tax Exemption Status',
                'record_type_id' => 8
            ],
            [
                'start_range' => 1,
                'end_range' => 7,
                'length' => 7,
                'description' => 'Sequence Number Area',
                'record_type_id' => 9
            ],
            [
                'start_range' => 8,
                'end_range' => 13,
                'length' => 6,
                'description' => 'Entry Run Number',
                'record_type_id' => 9
            ],
            [
                'start_range' => 14,
                'end_range' => 17,
                'length' => 4,
                'description' => 'Sequence Number (w/i the entry run)',
                'record_type_id' => 9
            ],
            [
                'start_range' => 18,
                'end_range' => 19,
                'length' => 2,
                'description' => 'Record Identifier (F2)',
                'record_type_id' => 9
            ],
            [
                'start_range' => 20,
                'end_range' => 35,
                'length' => 16,
                'description' => 'Merchant Account Number',
                'record_type_id' => 9
            ],
            [
                'start_range' => 36,
                'end_range' => 39,
                'length' => 4,
                'description' => 'Transaction Code',
                'record_type_id' => 9
            ],
            [
                'start_range' => 40,
                'end_range' => 42,
                'length' => 3,
                'description' => 'Product Code',
                'record_type_id' => 9
            ],
            [
                'start_range' => 43,
                'end_range' => 77,
                'length' => 35,
                'description' => 'Item Description',
                'record_type_id' => 9
            ],
            [
                'start_range' => 78,
                'end_range' => 82,
                'length' => 5,
                'description' => 'Item Quantity',
                'record_type_id' => 9
            ],
            [
                'start_range' => 83,
                'end_range' => 85,
                'length' => 3,
                'description' => 'VS Item Sequence Number/MC Item Unit of Measure',
                'record_type_id' => 9
            ],
            [
                'start_range' => 86,
                'end_range' => 94,
                'length' => 9,
                'description' => 'Extended Item Amount',
                'record_type_id' => 9
            ],
            [
                'start_range' => 95,
                'end_range' => 95,
                'length' => 1,
                'description' => 'Discount Indicator',
                'record_type_id' => 9
            ],
            [
                'start_range' => 96,
                'end_range' => 104,
                'length' => 9,
                'description' => 'Discount Amount',
                'record_type_id' => 9
            ],
            [
                'start_range' => 105,
                'end_range' => 105,
                'length' => 1,
                'description' => 'Net/Gross Indicator for EXT Item A',
                'record_type_id' => 9
            ],
            [
                'start_range' => 106,
                'end_range' => 110,
                'length' => 5,
                'description' => 'Tax Rate Applied',
                'record_type_id' => 9
            ],
            [
                'start_range' => 111,
                'end_range' => 114,
                'length' => 4,
                'description' => 'Tax Type Applied',
                'record_type_id' => 9
            ],
            [
                'start_range' => 115,
                'end_range' => 123,
                'length' => 9,
                'description' => 'Tax Amount',
                'record_type_id' => 9
            ],
            [
                'start_range' => 124,
                'end_range' => 124,
                'length' => 1,
                'description' => 'Debit/Credit Indicator',
                'record_type_id' => 9
            ],
            [
                'start_range' => 125,
                'end_range' => 139,
                'length' => 15,
                'description' => 'VS Message ID/MC Alternate Tax ID',
                'record_type_id' => 9
            ],
            [
                'start_range' => 140,
                'end_range' => 140,
                'length' => 1,
                'description' => 'Extension Record Indicator',
                'record_type_id' => 9
            ],
            [
                'start_range' => 141,
                'end_range' => 141,
                'length' => 1,
                'description' => 'Federal Excise Tax Exemption Status',
                'record_type_id' => 9
            ],
            [
                'start_range' => 142,
                'end_range' => 153,
                'length' => 12,
                'description' => 'Federal Non-Fuel Excise Tax',
                'record_type_id' => 9
            ],
            [
                'start_range' => 154,
                'end_range' => 154,
                'length' => 1,
                'description' => 'Federal Fuel Tax Exemption Status',
                'record_type_id' => 9
            ],
            [
                'start_range' => 155,
                'end_range' => 166,
                'length' => 12,
                'description' => 'Federal Fuel Excise Tax',
                'record_type_id' => 9
            ],
            [
                'start_range' => 167,
                'end_range' => 167,
                'length' => 1,
                'description' => 'State Motor Fuel Tax Exempt Status',
                'record_type_id' => 9
            ],
            [
                'start_range' => 168,
                'end_range' => 179,
                'length' => 12,
                'description' => 'State Motor Fuel Tax',
                'record_type_id' => 9
            ],
            [
                'start_range' => 180,
                'end_range' => 180,
                'length' => 1,
                'description' => 'County Fuel Tax Exemption Status',
                'record_type_id' => 9
            ],
            [
                'start_range' => 181,
                'end_range' => 192,
                'length' => 12,
                'description' => 'County Fuel Sales Tax',
                'record_type_id' => 9
            ],
            [
                'start_range' => 193,
                'end_range' => 193,
                'length' => 1,
                'description' => 'State and Local Tax Exempt Status',
                'record_type_id' => 9
            ],
            [
                'start_range' => 194,
                'end_range' => 205,
                'length' => 12,
                'description' => 'State and Local Sales Tax (Non-Fuel)',
                'record_type_id' => 9
            ],
            [
                'start_range' => 206,
                'end_range' => 206,
                'length' => 1,
                'description' => 'County Motor Fuel Tax Exempt Status',
                'record_type_id' => 9
            ],
            [
                'start_range' => 207,
                'end_range' => 218,
                'length' => 12,
                'description' => 'County Motor Fuel Sales Tax',
                'record_type_id' => 9
            ],
            [
                'start_range' => 219,
                'end_range' => 219,
                'length' => 1,
                'description' => 'City Sales Fuel Tax Exempt Status',
                'record_type_id' => 9
            ],
            [
                'start_range' => 220,
                'end_range' => 231,
                'length' => 12,
                'description' => 'City Sales Fuel Tax',
                'record_type_id' => 9
            ],
            [
                'start_range' => 232,
                'end_range' => 232,
                'length' => 1,
                'description' => 'City Motor Fuel Tax Exempt Status',
                'record_type_id' => 9
            ],
            [
                'start_range' => 233,
                'end_range' => 244,
                'length' => 12,
                'description' => 'City Motor Fuel Sales Tax',
                'record_type_id' => 9
            ],
            [
                'start_range' => 245,
                'end_range' => 245,
                'length' => 1,
                'description' => 'Secondary State Fuel Tax Exempt Status',
                'record_type_id' => 9
            ],
            [
                'start_range' => 246,
                'end_range' => 257,
                'length' => 12,
                'description' => 'Secondary State Fuel Tax',
                'record_type_id' => 9
            ],
            [
                'start_range' => 258,
                'end_range' => 258,
                'length' => 1,
                'description' => 'Reimbursement Attribute Code',
                'record_type_id' => 9
            ],
            [
                'start_range' => 259,
                'end_range' => 259,
                'length' => 1,
                'description' => 'Federal Sales Tax Exemption Status',
                'record_type_id' => 9
            ],
            [
                'start_range' => 260,
                'end_range' => 271,
                'length' => 12,
                'description' => 'Federal Sales Tax',
                'record_type_id' => 9
            ],
            [
                'start_range' => 1,
                'end_range' => 7,
                'length' => 7,
                'description' => 'Sequence Number Area',
                'record_type_id' => 10
            ],
            [
                'start_range' => 18,
                'end_range' => 19,
                'length' => 2,
                'description' => 'Record Identifier (TH)',
                'record_type_id' => 10
            ],
            [
                'start_range' => 40,
                'end_range' => 45,
                'length' => 6,
                'description' => 'Posting Date (MMDDYY)',
                'record_type_id' => 10
            ],
            [
                'start_range' => 46,
                'end_range' => 51,
                'length' => 6,
                'description' => 'System Date (MMDDYY)',
                'record_type_id' => 10
            ],
            [
                'start_range' => 52,
                'end_range' => 55,
                'length' => 4,
                'description' => 'Transmit Bank',
                'record_type_id' => 10
            ],
            [
                'start_range' => 1,
                'end_range' => 7,
                'length' => 7,
                'description' => 'Sequence Number Area',
                'record_type_id' => 11
            ],
            [
                'start_range' => 8,
                'end_range' => 13,
                'length' => 6,
                'description' => 'Entry Run Number',
                'record_type_id' => 11
            ],
            [
                'start_range' => 14,
                'end_range' => 17,
                'length' => 4,
                'description' => 'Sequence Number (w/i the entry run)',
                'record_type_id' => 11
            ],
            [
                'start_range' => 18,
                'end_range' => 19,
                'length' => 2,
                'description' => 'Record Identifier (BH)',
                'record_type_id' => 11
            ],
            [
                'start_range' => 20,
                'end_range' => 35,
                'length' => 16,
                'description' => 'Merchant Account Number',
                'record_type_id' => 11
            ],
            [
                'start_range' => 36,
                'end_range' => 39,
                'length' => 4,
                'description' => 'Transaction Code',
                'record_type_id' => 11
            ],
            [
                'start_range' => 40,
                'end_range' => 47,
                'length' => 8,
                'description' => 'Batch Date (MMDDCCYY)',
                'record_type_id' => 11
            ],
            [
                'start_range' => 48,
                'end_range' => 52,
                'length' => 5,
                'description' => 'Batch Julian Date (DDDYY)',
                'record_type_id' => 11
            ],
            [
                'start_range' => 53,
                'end_range' => 67,
                'length' => 15,
                'description' => 'Net Deposit',
                'record_type_id' => 11
            ],
            [
                'start_range' => 68,
                'end_range' => 71,
                'length' => 4,
                'description' => 'Reject Reason',
                'record_type_id' => 11
            ],
            [
                'start_range' => 72,
                'end_range' => 87,
                'length' => 16,
                'description' => 'Merchant Reference Number',
                'record_type_id' => 11
            ],
            [
                'start_range' => 88,
                'end_range' => 88,
                'length' => 1,
                'description' => 'Batch Header Carry Indicator',
                'record_type_id' => 11
            ],
            [
                'start_range' => 89,
                'end_range' => 94,
                'length' => 6,
                'description' => 'Association Number',
                'record_type_id' => 11
            ],
            [
                'start_range' => 95,
                'end_range' => 98,
                'length' => 4,
                'description' => 'Merchant Bank Number',
                'record_type_id' => 11
            ],
            [
                'start_range' => 99,
                'end_range' => 99,
                'length' => 1,
                'description' => 'Debit/Credit Indicator',
                'record_type_id' => 11
            ],
            [
                'start_range' => 100,
                'end_range' => 107,
                'length' => 8,
                'description' => 'ACH Posting Date (MMDDCCYY)',
                'record_type_id' => 11
            ],
            [
                'start_range' => 1,
                'end_range' => 7,
                'length' => 7,
                'description' => 'Sequence Number Area',
                'record_type_id' => 12
            ],
            [
                'start_range' => 8,
                'end_range' => 13,
                'length' => 6,
                'description' => 'Entry Run Number',
                'record_type_id' => 12
            ],
            [
                'start_range' => 14,
                'end_range' => 17,
                'length' => 4,
                'description' => 'Sequence Number (w/i the entry run)',
                'record_type_id' => 12
            ],
            [
                'start_range' => 18,
                'end_range' => 19,
                'length' => 2,
                'description' => 'Record Identifier (AD)',
                'record_type_id' => 12
            ],
            [
                'start_range' => 20,
                'end_range' => 35,
                'length' => 16,
                'description' => 'Merchant Account Number',
                'record_type_id' => 12
            ],
            [
                'start_range' => 36,
                'end_range' => 39,
                'length' => 4,
                'description' => 'Transaction Code',
                'record_type_id' => 12
            ],
            [
                'start_range' => 40,
                'end_range' => 50,
                'length' => 11,
                'description' => 'Reference Number',
                'record_type_id' => 12
            ],
            [
                'start_range' => 51,
                'end_range' => 61,
                'length' => 11,
                'description' => 'Adjustment Amount',
                'record_type_id' => 12
            ],
            [
                'start_range' => 62,
                'end_range' => 69,
                'length' => 8,
                'description' => 'Transaction Date (MMDDCCYY)',
                'record_type_id' => 12
            ],
            [
                'start_range' => 70,
                'end_range' => 70,
                'length' => 1,
                'description' => 'Carryover Indicator',
                'record_type_id' => 12
            ],
            [
                'start_range' => 71,
                'end_range' => 71,
                'length' => 1,
                'description' => 'Online Entry',
                'record_type_id' => 12
            ],
            [
                'start_range' => 72,
                'end_range' => 72,
                'length' => 1,
                'description' => 'ACH Flag',
                'record_type_id' => 12
            ],
            [
                'start_range' => 73,
                'end_range' => 77,
                'length' => 5,
                'description' => 'Batch Julian Date (DDDYY)',
                'record_type_id' => 12
            ],
            [
                'start_range' => 78,
                'end_range' => 78,
                'length' => 1,
                'description' => 'Reversal Flag',
                'record_type_id' => 12
            ],
            [
                'start_range' => 79,
                'end_range' => 79,
                'length' => 1,
                'description' => 'Debit/Credit Indicator',
                'record_type_id' => 12
            ],
            [
                'start_range' => 80,
                'end_range' => 83,
                'length' => 4,
                'description' => 'Bank Number',
                'record_type_id' => 12
            ],
            [
                'start_range' => 84,
                'end_range' => 89,
                'length' => 6,
                'description' => 'Association Number',
                'record_type_id' => 12
            ],
            [
                'start_range' => 90,
                'end_range' => 97,
                'length' => 8,
                'description' => 'Posting Date (MMDDCCYY)',
                'record_type_id' => 12
            ],
            [
                'start_range' => 98,
                'end_range' => 110,
                'length' => 13,
                'description' => 'Chargeback Case Number',
                'record_type_id' => 12
            ],
            [
                'start_range' => 0,
                'end_range' => 0,
                'length' => 0,
                'description' => 'Foreign key to ddf detail',
                'record_type_id' => 5
            ],
            [
                'start_range' => 157,
                'end_range' => 171,
                'length' => 15,
                'description' => 'TRansaction Identification number',
                'record_type_id' => 1
            ],
            [
                'start_range' => 56,
                'end_range' => 59,
                'length' => 3,
                'description' => 'reserved for future',
                'record_type_id' => 2
            ],
            [
                'start_range' => 60,
                'end_range' => 84,
                'length' => 25,
                'description' => 'Product Identifier',
                'record_type_id' => 2
            ],
            [
                'start_range' => 40,
                'end_range' => 58,
                'length' => 19,
                'description' => 'Future',
                'record_type_id' => 5
            ],
            [
                'start_range' => 220,
                'end_range' => 600,
                'length' => 381,
                'description' => 'Future',
                'record_type_id' => 5
            ],
            [
                'start_range' => 111,
                'end_range' => 600,
                'length' => 390,
                'description' => 'Future',
                'record_type_id' => 12
            ],
            [
                'start_range' => 1,
                'end_range' => 7,
                'length' => 7,
                'description' => 'SequenceNumberArea',
                'record_type_id' => 13
            ],
            [
                'start_range' => 8,
                'end_range' => 13,
                'length' => 6,
                'description' => 'EntryRunNumber',
                'record_type_id' => 13
            ],
            [
                'start_range' => 14,
                'end_range' => 17,
                'length' => 4,
                'description' => 'SequenceNumber(w/itheentryrun)',
                'record_type_id' => 13
            ],
            [
                'start_range' => 18,
                'end_range' => 19,
                'length' => 2,
                'description' => 'RecordIdentifier(TT)',
                'record_type_id' => 13
            ],
            [
                'start_range' => 20,
                'end_range' => 35,
                'length' => 16,
                'description' => 'MerchantAccountNumber',
                'record_type_id' => 13
            ],
            [
                'start_range' => 36,
                'end_range' => 39,
                'length' => 4,
                'description' => 'TransactionCode',
                'record_type_id' => 13
            ],
            [
                'start_range' => 40,
                'end_range' => 51,
                'length' => 12,
                'description' => 'Number-Depositsales',
                'record_type_id' => 13
            ],
            [
                'start_range' => 52,
                'end_range' => 66,
                'length' => 15,
                'description' => 'DollarAmount-DepositSales',
                'record_type_id' => 13
            ],
            [
                'start_range' => 67,
                'end_range' => 78,
                'length' => 12,
                'description' => 'Number-DepositCredit',
                'record_type_id' => 13
            ],
            [
                'start_range' => 79,
                'end_range' => 93,
                'length' => 15,
                'description' => 'DollarAmount-DepositCredit',
                'record_type_id' => 13
            ],
            [
                'start_range' => 94,
                'end_range' => 105,
                'length' => 12,
                'description' => 'Number-CashAdvance',
                'record_type_id' => 13
            ],
            [
                'start_range' => 106,
                'end_range' => 120,
                'length' => 15,
                'description' => 'DollarAmount-CashAdvance',
                'record_type_id' => 13
            ],
            [
                'start_range' => 121,
                'end_range' => 132,
                'length' => 12,
                'description' => 'Number-NetDeposit',
                'record_type_id' => 13
            ],
            [
                'start_range' => 133,
                'end_range' => 147,
                'length' => 15,
                'description' => 'DollarAmount-NetDeposit',
                'record_type_id' => 13
            ],
            [
                'start_range' => 149,
                'end_range' => 160,
                'length' => 12,
                'description' => 'Number-MerchantAdjustment',
                'record_type_id' => 13
            ],
            [
                'start_range' => 161,
                'end_range' => 175,
                'length' => 15,
                'description' => 'DollarAmount-MerchantAdjustment',
                'record_type_id' => 13
            ],
            [
                'start_range' => 177,
                'end_range' => 188,
                'length' => 12,
                'description' => 'Number-DraftA',
                'record_type_id' => 13
            ],
            [
                'start_range' => 189,
                'end_range' => 203,
                'length' => 15,
                'description' => 'DollarAmount-DraftA',
                'record_type_id' => 13
            ],
            [
                'start_range' => 205,
                'end_range' => 216,
                'length' => 12,
                'description' => 'Number-NonFinancialDebit',
                'record_type_id' => 13
            ],
            [
                'start_range' => 217,
                'end_range' => 231,
                'length' => 15,
                'description' => 'DollarAmount-NonFinancialDebit',
                'record_type_id' => 13
            ],
            [
                'start_range' => 232,
                'end_range' => 243,
                'length' => 12,
                'description' => 'Number-NonFinancialCredit',
                'record_type_id' => 13
            ],
            [
                'start_range' => 244,
                'end_range' => 258,
                'length' => 15,
                'description' => 'DollarAmount-NonFinancialCredit',
                'record_type_id' => 13
            ],
            [
                'start_range' => 259,
                'end_range' => 600,
                'length' => 342,
                'description' => 'Reservedforfutureuse',
                'record_type_id' => 13
            ],
            [
                'start_range' => 97,
                'end_range' => 600,
                'length' => 504,
                'description' => 'Future',
                'record_type_id' => 6
            ],
            [
                'start_range' => 1,
                'end_range' => 7,
                'length' => 7,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 8,
                'end_range' => 13,
                'length' => 6,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 14,
                'end_range' => 17,
                'length' => 4,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 18,
                'end_range' => 19,
                'length' => 2,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 20,
                'end_range' => 35,
                'length' => 16,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 36,
                'end_range' => 39,
                'length' => 4,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 40,
                'end_range' => 64,
                'length' => 25,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 65,
                'end_range' => 74,
                'length' => 10,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 75,
                'end_range' => 75,
                'length' => 1,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 76,
                'end_range' => 81,
                'length' => 6,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 82,
                'end_range' => 87,
                'length' => 6,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 88,
                'end_range' => 88,
                'length' => 1,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 89,
                'end_range' => 100,
                'length' => 12,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 101,
                'end_range' => 110,
                'length' => 10,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 111,
                'end_range' => 116,
                'length' => 6,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 117,
                'end_range' => 118,
                'length' => 2,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 119,
                'end_range' => 130,
                'length' => 12,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 131,
                'end_range' => 142,
                'length' => 12,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 143,
                'end_range' => 154,
                'length' => 12,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 155,
                'end_range' => 166,
                'length' => 12,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 167,
                'end_range' => 178,
                'length' => 12,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 179,
                'end_range' => 190,
                'length' => 12,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 191,
                'end_range' => 202,
                'length' => 12,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 203,
                'end_range' => 205,
                'length' => 3,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 206,
                'end_range' => 217,
                'length' => 12,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 218,
                'end_range' => 218,
                'length' => 1,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 219,
                'end_range' => 230,
                'length' => 12,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 231,
                'end_range' => 242,
                'length' => 12,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 243,
                'end_range' => 247,
                'length' => 5,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 248,
                'end_range' => 249,
                'length' => 2,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 250,
                'end_range' => 261,
                'length' => 12,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 262,
                'end_range' => 600,
                'length' => 339,
                'description' => null,
                'record_type_id' => 14
            ],
            [
                'start_range' => 1,
                'end_range' => 7,
                'length' => 7,
                'description' => null,
                'record_type_id' => 15
            ],
            [
                'start_range' => 8,
                'end_range' => 13,
                'length' => 6,
                'description' => null,
                'record_type_id' => 15
            ],
            [
                'start_range' => 14,
                'end_range' => 17,
                'length' => 4,
                'description' => null,
                'record_type_id' => 15
            ],
            [
                'start_range' => 18,
                'end_range' => 19,
                'length' => 2,
                'description' => null,
                'record_type_id' => 15
            ],
            [
                'start_range' => 20,
                'end_range' => 35,
                'length' => 16,
                'description' => null,
                'record_type_id' => 15
            ],
            [
                'start_range' => 36,
                'end_range' => 39,
                'length' => 4,
                'description' => null,
                'record_type_id' => 15
            ],
            [
                'start_range' => 40,
                'end_range' => 58,
                'length' => 19,
                'description' => null,
                'record_type_id' => 15
            ],
            [
                'start_range' => 59,
                'end_range' => 67,
                'length' => 9,
                'description' => null,
                'record_type_id' => 15
            ],
            [
                'start_range' => 68,
                'end_range' => 82,
                'length' => 15,
                'description' => null,
                'record_type_id' => 15
            ],
            [
                'start_range' => 83,
                'end_range' => 84,
                'length' => 2,
                'description' => null,
                'record_type_id' => 15
            ],
            [
                'start_range' => 85,
                'end_range' => 89,
                'length' => 5,
                'description' => null,
                'record_type_id' => 15
            ],
            [
                'start_range' => 90,
                'end_range' => 95,
                'length' => 6,
                'description' => null,
                'record_type_id' => 15
            ],
            [
                'start_range' => 96,
                'end_range' => 108,
                'length' => 13,
                'description' => null,
                'record_type_id' => 15
            ],
            [
                'start_range' => 109,
                'end_range' => 113,
                'length' => 5,
                'description' => null,
                'record_type_id' => 15
            ],
            [
                'start_range' => 114,
                'end_range' => 600,
                'length' => 487,
                'description' => null,
                'record_type_id' => 15
            ],
        ]);
    }
}
