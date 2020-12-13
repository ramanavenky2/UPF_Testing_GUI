import argparse
parser = argparse.ArgumentParser()

parser.add_argument( '--subscriber_id')	       #expects command line argument value for subscriber_id
parser.add_argument( '--pdr_state')		#expects command line argument value for pdr_state
parser.add_argument( '--in_teid')		#expects command line argument value for in_teid
parser.add_argument( '--out_teid')		#expects command line argument value for ot_teid
parser.add_argument( '--ue_ip_addr')		#expects command line argument value for ue_ip_addr
parser.add_argument( '--gnb_ip_addr')		#expects command line argument value for gnb_ip_addr
parser.add_argument( '--add_rule_id')		#expects command line argument value for add_rule_id
parser.add_argument( '--ipv4_dst')		#expects command line argument value for ipv4_dst
parser.add_argument( '--priority')		#expects command line argument value for priority

args = parser.parse_args()

print(args.subscriber_id)
print(args.pdr_state)
print(args.in_teid)
print(args.out_teid)
print(args.ue_ip_addr)
print(args.gnb_ip_addr)
print(args.add_rule_id)
print(args.ipv4_dst)
print(args.priority)
